<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Dashboard extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->load->model('Model_common');
    }
    function editmarque()
    {
        $data['martext'] = $this->Model_common->get_mtextbyid();
        $this->form_validation->set_rules(
            'textone',
            'textone',
            'required|max_length[500]'
        );

        if (isset($data['martext']['idmarquee'])) {
        
            $params = [
                'marquee_text' => $this->input->post('textone')
            ];
            $this->Model_common->update_mtext($params);
            $this->session->set_flashdata(
                'danger',
                '<div class="alert alert-success ">Slider text edited successfully</div>'
            );
            redirect('Dashboard/index');
        } else {
            show_error('The slider text you are trying to edit does not exist.');
        }
    }
    public function index()
    {
        $data['martext'] = $this->Model_common->get_mtextbyid();
        $data['notice'] = $this->Model_common->getNotificationsData();
        $this->load->view('include/header');
        $this->load->view('dashboard', $data);
        $this->load->view('include/footer');
    }

    public function studentIndex()
    {
        $data['students'] = $this->Model_common->getStudentsData();
        $this->load->view('include/header');
        $this->load->view('student/index', $data);
        $this->load->view('include/footer');
    }

    public function removeStudent($id)
    {
        $data = $this->Model_common->getStudentsByID($id);
        // check if the announcement details exists before trying to delete it
        if (isset($data['idusers'])) {
            $this->Model_common->deleteStudents($id);
            $this->session->set_flashdata(
                'danger',
                '<div class="alert alert-danger ">Student removed successfully</div>'
            );
            redirect('Dashboard/studentIndex');
        } else {
            show_error('The Student details you are trying to delete does not exist.');
        }
    }
}