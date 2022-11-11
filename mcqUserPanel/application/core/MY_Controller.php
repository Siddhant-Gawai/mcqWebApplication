<?php 

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
	}
}

class Admin_Controller extends MY_Controller 
{
	
	var $permission = array();
	public function __construct() 
	{
		parent:: __construct();

		$group_data = array();
		if(empty($this->session->userdata('isloggedin'))) {
		//  if(! $this->session->userdata('logged_in')) {

			$session_data = array('isloggedin' => FALSE);
			$this->session->set_userdata($session_data);
		}
		else {
			$user_id = $this->session->userdata('studid');
			// $this->load->model('model_groups');
			// $group_data = $this->model_groups->getUserGroupByUserId($user_id);
			
			// $this->data['user_permission'] = unserialize($group_data['permission']);

			// $this->permission = unserialize($group_data['permission']);
		}
	}

	public function logged_in()
	{
        $session_data = $this->session->userdata(); 
		if($session_data['isloggedin'] == TRUE) {
            redirect('LoggedDashboard', 'refresh');
		}
	}

    public function not_logged_in()
	{
		$session_data = $this->session->userdata();
		if($session_data['isloggedin'] == FALSE) {
			redirect('Welcome/goToLogin', 'refresh');
		}
	}

	public function render_template($page = null, $data = array())
	{
		$this->load->view('include/header',$data);
		$this->load->view($page, $data);
		$this->load->view('include/footer',$data);
	}

	

}
