<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->logged_in();
        $this->load->model('Model_common');
    }

	public function notices()
	{
		$data['notices'] = $this->Model_common->getNotificationsData();
		$this->load->view('include/header');
		$this->load->view('include/cardcss');
		$this->load->view('pages/notices',$data);
	}
	public function news(){
		$this->load->view('include/header');
		$this->load->view('pages/news');
	}
	public function downloads(){
		$data['downloads'] = $this->Model_common->getDownloadsData();
		$this->load->view('include/header');
		$this->load->view('pages/downloads',$data);
	}
	public function upcoming(){
		$data['ue'] = $this->Model_common->getUEData();
		$this->load->view('include/header');
		$this->load->view('pages/upcoming',$data);
	}


}
