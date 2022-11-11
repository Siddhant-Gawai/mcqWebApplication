<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends Admin_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->logged_in();
		$this->load->model('Model_common');
	}

	public function index()
	{
		$data['martext'] = $this->Model_common->get_mtextbyid();
		$this->load->view('include/header');
		$this->load->view('home', $data);
	}

	public function goToLogin()
	{
		$this->load->view('include/header');
		$this->load->view('login');
	}
	public function goToSignUp()
	{
		$this->load->view('include/header');
		$this->load->view('signup');
	}

	public function subscribe()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		if ($this->form_validation->run() == TRUE) {
			$useremail = $this->input->post('email');
			$data = $this->Model_common->getEmailSubscriptionByEmail($useremail);
			if(isset($data['email'])) {
				$this->session->set_flashdata('success', '<div class="alert alert-success"> Email newsletter subscribed successfully </div>');
				redirect('Welcome/index');
			} else {
			$params = array(
				'email' => $useremail
			);
			$this->Model_common->addEmailSubscribers($params);

			$this->load->library('email');
			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'smtp.hostinger.com',
				'smtp_port' => 587,
				'smtp_user' => 'subscription@studykaro.tech',
				'smtp_pass' => 'Pass@1234',
				'mailtype'  => 'html',
				'charset'   => 'iso-8859-1',
				'wordwrap' => TRUE
			);
			$this->email->initialize($config);
			$this->load->helper('string');
			$this->email->from('subscription@studykaro.tech', 'MCQ - Study Karo Online');
			$this->email->to($useremail);
			$this->email->subject('Email Subscription success');
			$this->email->message('You Have been subscribed successfully to Study Karo Tech');
			$this->email->set_newline("\r\n");
			$this->email->send();
			$this->email->print_debugger();
			$this->session->set_flashdata('success', '<div class="alert alert-success"> Email newsletter subscribed successfully. </div>');
			$data['martext'] = $this->Model_common->get_mtextbyid();
			$this->load->view('include/header');
			$this->load->view('home', $data);
		}
		} else {
			redirect('Welcome/index');
		}
	}
}
