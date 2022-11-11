<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Exams extends Admin_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->not_logged_in();
		$this->load->model('Model_auth');
		$this->load->model('Model_common');
	}

	public function preview($id)
	{
		$data['exam'] = $this->Model_common->getExamByID($id);
		$this->load->view('dashboard/include/header');
		$this->load->view('dashboard/exams/preview', $data);
		$this->load->view('dashboard/include/footer');
	}

	public function startExam($id)
	{
		date_default_timezone_set('Asia/Kolkata');
		$data['exam'] = $this->Model_common->getExamByID($id);
		$data['users'] = $this->Model_common->getExamUsersbyUser($id, $this->session->userdata('studid'));
		if ($data['users']['exams_users_idusers']) {
			if ($data['users']['exams_users_completed'] != '1') {
				redirect('Exams/attemptExam/' . $id);
			} else {
				$this->session->set_flashdata('danger', '<div class="alert alert-danger">You have already attempted the exam.</div>');
				redirect('Exams/testAnswers/'.$id);
			}
		} else {
			$params = array(
				'exams_users_idusers' => $this->session->userdata('studid'),
				'exams_users_idexams' => $id,
				'exams_users_accepted' => '1',
				'exams_users_completed' => '0',
				'exams_users_timec' => '0',
				'exams_users_time' => $data['exam']['exams_time'],
				'exams_users_created' => date('d-m-Y H:i:s'),
			);
			$this->Model_common->addExamUsers($params);
			$this->session->set_flashdata('success', '<div class="alert alert-success">Exam started successfully.</div>');
			redirect('Exams/attemptExam/' . $id);
		}
	}
	public function guidv4($data = null)
	{
		// Generate 16 bytes (128 bits) of random data or use the data passed into the function.
		$data = $data ?? random_bytes(16);
		assert(strlen($data) == 16);

		// Set version to 0100
		$data[6] = chr(ord($data[6]) & 0x0f | 0x40);
		// Set bits 6-7 to 10
		$data[8] = chr(ord($data[8]) & 0x3f | 0x80);

		// Output the 36 character UUID.
		return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
	}

	public function attemptExam($id)
	{
		$data['exam'] = $this->Model_common->getExamByID($id);
		$data['questions'] = $this->Model_common->getRandomQuestions($id, intval($data['exam']['exams_questions']));
		$data['users'] = $this->Model_common->getExamUsersbyUser($id, $this->session->userdata('studid'));
		$co = count($data['questions']);
		if ($co > 0) {
			if ($data['users']['uuid']) {
				$data['sr'] = $this->Model_common->getTempData($data['users']['uuid']);
				$data['que'] = $this->Model_common->getFirstQuestion($data['users']['uuid']);
				$this->load->view('dashboard/include/header');
				$this->load->view('dashboard/exams/attempt', $data);
				$this->load->view('dashboard/include/footer');
			} else {
				$myuuid = $this->guidv4();
				$i = 1;
				foreach ($data['questions'] as $q) {
					$params = array(
						'uuid' => $myuuid,
						'qid' => $q['idquestions'],
						'completed' => 0,
						'srno' => $i
					);
					$this->Model_common->addTempData($params);
					$i++;
				}
				$params2 = array(
					'uuid' => $myuuid
				);
				$this->Model_common->updateExamUsers($data['users']['idexams_users'], $params2);
				$data['users'] = $this->Model_common->getExamUsersbyUser($id, $this->session->userdata('studid'));
				$data['sr'] = $this->Model_common->getTempData($myuuid);
				$data['que'] = $this->Model_common->getFirstQuestion($myuuid);
				$this->load->view('dashboard/include/header');
				$this->load->view('dashboard/exams/attempt', $data);
				$this->load->view('dashboard/include/footer');
			}
		} else {
			echo "No Questions available";
		}
	}
	

	// getFirstQuestion uuid
	// getNextQuestion id



	public function next($question, $id)
	{
		$qid = intval($question) + 1;
		$data['que'] = $this->Model_common->getNextQuestion($qid);
		$data['exam'] = $this->Model_common->getExamByID($id);
		$data['users'] = $this->Model_common->getExamUsersbyUser($id, $this->session->userdata('studid'));
		$data['sr'] = $this->Model_common->getTempData($data['users']['uuid']);
		$this->load->view('dashboard/include/header');
		$this->load->view('dashboard/exams/attempt', $data);
		$this->load->view('dashboard/include/footer');
	}

	public function particular($qid, $id)
	{
		$data['que'] = $this->Model_common->getNextQuestion($qid);
		$data['exam'] = $this->Model_common->getExamByID($id);
		$data['users'] = $this->Model_common->getExamUsersbyUser($id, $this->session->userdata('studid'));
		$data['sr'] = $this->Model_common->getTempData($data['users']['uuid']);
		$this->load->view('dashboard/include/header');
		$this->load->view('dashboard/exams/attempt', $data);
		$this->load->view('dashboard/include/footer');
	}

	public function addAnswers($qid, $id)
	{
		date_default_timezone_set('Asia/Kolkata');
		$radio = $this->input->post('flexRadioDefault');
		$time = $this->input->post('time');
		$data['user'] = $this->Model_common->getpreviousAnswer($id, $qid, $this->session->userdata('studid'));
		$data['users'] = $this->Model_common->getExamUsersbyUser($id, $this->session->userdata('studid'));
		if ($radio) {
			if ($data['user']['idexams_sdata']) {
				$params = array(
					'exams_sdata_idexams' => $id,
					'exams_sdata_idquestions' => $qid,
					'exams_sdata_idusers' => $this->session->userdata('studid'),
					'exams_sdata_selected' => $radio,
					'exams_sdata_created' => date('d-m-Y H:i:s'),
				);
				$params2 = array(
					'exams_users_time' => $time
				);
				// updateExamUsers
				$this->Model_common->updateExamUsers($data['users']['idexams_users'], $params2);
				$this->Model_common->updateExamAnswers($data['user']['idexams_sdata'], $params);
				$this->session->set_flashdata('success', '<div class="alert alert-success">Answer updated successfully.</div>');
				redirect('Exams/attemptExam/' . $id);
			} else {
				$params = array(
					'exams_sdata_idexams' => $id,
					'exams_sdata_idquestions' => $qid,
					'exams_sdata_idusers' => $this->session->userdata('studid'),
					'exams_sdata_selected' => $radio,
					'exams_sdata_created' => date('d-m-Y H:i:s'),
				);
				$params2 = array(
					'exams_users_time' => $time
				);
				$this->Model_common->updateExamUsers($data['users']['idexams_users'], $params2);
				$this->Model_common->addExamAnswers($params);
				$this->Model_common->updateExamUsersByQID($data['users']['uuid'], $qid);
				$this->session->set_flashdata('success', '<div class="alert alert-success">Answer saved successfully.</div>');
				redirect('Exams/attemptExam/' . $id);
			}
		} else {
			$params2 = array(
				'exams_users_time' => $time
			);
			$this->Model_common->updateExamUsers($data['users']['idexams_users'], $params2);
			redirect('Exams/attemptExam/' . $id);
		}
	}

	public function previous($question, $id)
	{
		$qid = intval($question) - 1;
		$data['que'] = $this->Model_common->getNextQuestion($qid);
		$data['exam'] = $this->Model_common->getExamByID($id);
		$data['users'] = $this->Model_common->getExamUsersbyUser($id, $this->session->userdata('studid'));
		$data['sr'] = $this->Model_common->getTempData($data['users']['uuid']);
		$this->load->view('dashboard/include/header');
		$this->load->view('dashboard/exams/attempt', $data);
		$this->load->view('dashboard/include/footer');
	}

	public function submit($exam)
	{
		$this->Model_common->submitTest($exam, $this->session->userdata('studid'));
		$this->session->set_flashdata('success', '<div class="alert alert-success">Test saved successfully.</div>');
		redirect('Exams/testAnswers/'.$exam);
	}

	public function autoSubmit()
	{
        $postData = $this->input->post();
		$this->Model_common->submitTest($postData['exam'], $this->session->userdata('studid'));
		$this->session->set_flashdata('success', '<div class="alert alert-success">Test saved successfully.</div>');
		redirect('Exams/testAnswers/'.$postData['exam']);
	}

	public function testAnswers($exam) {
		$sid = $this->session->userdata('studid');
		$data['users'] = $this->Model_common->getExamByID($exam);
		$data['ans'] = $this->Model_common->getAnswers($exam,$sid);
		$correctans = 0;
		$i = 0;
		foreach ($data['ans'] as $a) {
			$i +=1;
			if($a['exams_sdata_selected'] == $a['questions_answer']) {
				$correctans += 1;
			}
		}
		$data['solved'] = $i;
		$data['correctans'] = $correctans;
		
		$this->Model_common->updateMarks($exam, $sid, $correctans, $i);
		$this->load->view('dashboard/include/header');
		$this->load->view('dashboard/exams/result', $data);
		$this->load->view('dashboard/include/footer');
	}

	public function getAllTestAnswers(){
		$sid = $this->session->userdata('studid');
		$data['exams'] = $this->Model_common->getAllSubmittedExamBySID($sid);

	}
}
