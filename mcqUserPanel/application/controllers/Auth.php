<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends Admin_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_auth');
	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
	*/
	public function login()
	{
		$this->logged_in();
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == TRUE) {
			// true case
			$email_exists = $this->Model_auth->check_email($this->input->post('email'));
			$emaildata['email'] = $this->Model_auth->checkEmailVerified($this->input->post('email'));
			if ($email_exists == TRUE && $emaildata['email']['email_verified'] == '1') {

				$login = $this->Model_auth->login($this->input->post('email'), $this->input->post('password'));
				if ($login) {
					$logged_in_sess = array(
						'studid' => $login['idusers'],
						'studname'  => $login['users_name'],
						'studemail'     => $login['users_email'],
						'isloggedin' => TRUE
					);
					$this->session->set_userdata($logged_in_sess);
					redirect('LoggedDashboard', 'refresh');
				} else {
					$this->data['errors'] = ' <p style="color: red; text-align: center;"> Incorrect username/password combination </p>';
					$this->load->view('include/header');
					$this->load->view('login', $this->data);
				}
			} else {
				$this->data['errors'] = ' <p style="color: red; text-align: center;"> Email does not exists or is not verified yet. </p>';
				$this->load->view('include/header');
				$this->load->view('login', $this->data);
			}
		} else {
			// false case
			$this->load->view('include/header');
			$this->load->view('login');
		}
	}

	public function signup()
	{
		$this->logged_in();
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('number', 'Contact Number', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == TRUE) {
			// true case
			$email_exists = $this->Model_auth->check_email($this->input->post('email'));
			if ($email_exists == TRUE) {
				$this->data['errors'] = ' <p style="color: red; text-align: center;"> Email Already exists. Sign In </p>';
				$this->load->view('include/header');
				$this->load->view('signup', $this->data);
			} else {
				$number_exists = $this->Model_auth->check_number($this->input->post('number'));
				if ($number_exists == TRUE) {
					$this->data['errors'] = ' <p style="color: red; text-align: center;"> Contact Number Already exists </p>';
					$this->load->view('include/header');
					$this->load->view('signup', $this->data);
				} else {
					$password = $this->password_hash($this->input->post('password'));
					$params = array(
						'users_email' => $this->input->post('email'),
						'users_name' => $this->input->post('name'),
						'users_password' => $password,
						'users_number' => $this->input->post('number'),
					);
					$data['id'] = $this->Model_auth->addUser($params);
					$myuuid = $this->guidv4();
					$params2 = array(
						'token' => $myuuid,
						'idusers' => $data['id']
					);
					$this->Model_auth->addEmailRecord($params2);
					redirect('Auth/sendEmail/' . $data['id']);
					// $this->session->set_flashdata('success', '<div class="alert alert-success">Account created successfully.</div>');
					// redirect('Welcome/goToLogin');
				}
			}
		} else {
			// false case
			$this->load->view('include/header');
			$this->load->view('signup');
		}
	}

	public function sendEmail($id)
	{
		$data['email'] = $this->Model_auth->getEmailDetails($id);
		$useremail = $data['email']['users_email'];
		$token = $data['email']['token'];
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
		$this->email->subject('Email Verification');
		$uri = 'http://localhost/mcqUserPanel/Auth/verify/' . $token . '/' . $id;
		// $uri = 'http://studykaro.tech/Auth/verify/' . $token . '/' . $id;
		$this->email->message('<a href="' . $uri . '">Click here </a> to verify you email');
		$this->email->set_newline("\r\n");
		$data = $this->email->send();
		$this->session->set_flashdata('success', '<div class="alert alert-success">Account created successfully. Click on the link in your email to verify.</div>');
		redirect('Welcome/goToLogin');
	}

	public function resendVerificationLink()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		if ($this->form_validation->run() == TRUE) {
			$data['email'] = $this->Model_auth->checkEmailVerified($this->input->post('email'));
			if ($data['email']['email_verified'] == '0') {
				redirect('Auth/sendEmail/' . $data['email']['idusers']);
			} else {
				$this->session->set_flashdata('success', '<div class="alert alert-success">Email is already verified. Youc an login.</div>');
				redirect('Welcome/goToLogin');
			}
		} else {
			redirect('Welcome/goToLogin');
		}
	}

	public function verify($token, $id)
	{
		$data['email'] = $this->Model_auth->getEmailRecord($token, $id);
		if ($data['email']['email_verified'] == '0') {
			$params = array(
				'email_verified' => 1,
			);
			$this->Model_auth->updateEmailRecord($data['email']['id'], $params);
			$this->session->set_flashdata('success', '<div class="alert alert-success">Email Verified Successfully. You can now login</div>');
			redirect('Welcome/goToLogin');
		} else {
			$this->session->set_flashdata('success', '<div class="alert alert-success">No Data Available</div>');
			redirect('Welcome/goToLogin');
		}
	}

	public function password_hash($pass = '')
	{
		if ($pass) {
			$password = password_hash($pass, PASSWORD_DEFAULT);
			return $password;
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

	/*
		clears the session and redirects to login page
	*/
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Welcome/goToLogin', 'refresh');
	}
}
