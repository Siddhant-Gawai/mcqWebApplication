<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LoggedDashboard extends Admin_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->not_logged_in();
		$this->load->model('Model_auth');
		$this->load->model('Model_common');
	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
	*/

	public function index()
	{
		$data['user'] = $this->Model_common->getStudentsByID($this->session->userdata('studid'));
		$this->load->view('dashboard/include/header');
		$this->load->view('dashboard/home', $data);
		$this->load->view('dashboard/include/footer');
	}

	public function profile()
	{
		$sid = $this->session->userdata('studid');
		$data['user'] = $this->Model_common->getStudentsByID($sid);
		$data['exams'] = $this->Model_common->getAllSubmittedExamBySID($sid);
		$this->load->view('dashboard/include/header');
		$this->load->view('dashboard/profile', $data);
		$this->load->view('dashboard/include/footer');
	}

	public function notice()
	{
		$data['notice'] = $this->Model_common->getNotificationsData();
		$this->load->view('dashboard/include/header');
		$this->load->view('dashboard/notices', $data);
		$this->load->view('dashboard/include/footer');
	}

	public function downloads()
	{
		$data['downloads'] = $this->Model_common->getDownloadsData();
		$this->load->view('dashboard/include/header');
		$this->load->view('dashboard/downloads', $data);
		$this->load->view('dashboard/include/footer');
	}

	public function upcomingexams()
	{
		$data['ue'] = $this->Model_common->getUEData();
		$this->load->view('dashboard/include/header');
		$this->load->view('dashboard/upcomingexams', $data);
		$this->load->view('dashboard/include/footer');
	}

	public function currentaffairs()
	{
		$data['ca'] = $this->Model_common->getCAData();
		$this->load->view('dashboard/include/header');
		$this->load->view('dashboard/currentaffairs', $data);
		$this->load->view('dashboard/include/footer');
	}

	public function exams()
	{
		$data['exams'] = $this->Model_common->getExamsData();
		$this->load->view('dashboard/include/header');
		$this->load->view('dashboard/exams', $data);
		$this->load->view('dashboard/include/footer');
	}

	public function syllabus()
	{
		$data['syllabus'] = $this->Model_common->getSyllabusData();
		$this->load->view('dashboard/include/header');
		$this->load->view('dashboard/syllabus', $data);
		$this->load->view('dashboard/include/footer');
	}

	public function password_hash($pass = '')
	{
		if ($pass) {
			$password = password_hash($pass, PASSWORD_DEFAULT);
			return $password;
		}
	}

	public function updatePass()
	{
		$this->form_validation->set_rules(
			'oldpass',
			'Old Password',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'newpass',
			'Password',
			'trim|required'
		);

		if ($this->form_validation->run() == true) {

			$password = $this->password_hash(
				$this->input->post('newpass')
			);
			$id = $this->session->userdata('studid');
			$verify = $this->Model_auth->checkPass($id, $this->input->post('oldpass'));
			if ($verify == true) {
				$data = [
					'users_password' => $password,
				];

				$update = $this->Model_auth->updatePassword(
					$data,
					$id
				);
				if ($update == true) {
					$this->session->sess_destroy();
					$this->session->set_flashdata('success', '<div class="alert alert-success">Password updated successfully;</div>');
					redirect('Welcome/goToLogin', 'refresh');
				} else {
					$this->session->set_flashdata('danger', '<div class="alert alert-danger">Internal server error.</div>');
					redirect('LoggedDashboard/profile', 'refresh');
				}
			} else {
				// Send old pass does not match
				$this->session->set_flashdata('danger', '<div class="alert alert-danger">Old password is wrong.</div>');
				redirect('LoggedDashboard/profile', 'refresh');
			}
		} else {
			redirect('LoggedDashboard/profile');
		}
	}
}
