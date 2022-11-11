<?php

class Users extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->data['page_title'] = 'Users';
        $this->load->model('Model_users');
    }

    public function index()
    {
        if (!in_array('viewUser', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

        $user_data = $this->Model_users->getUserData();
        $result = [];
        foreach ($user_data as $k => $v) {
            $result[$k]['user_info'] = $v;
        }

        $this->data['user_data'] = $result;
        $this->load->view('include/header');
        // $data['_view'] = 'users/setting';
        $this->load->view('users/setting', $this->data);
        $this->load->view('include/footer');
    }
    
    public function password_hash($pass = '')
    {
        if ($pass) {
            $password = password_hash($pass, PASSWORD_DEFAULT);
            return $password;
        }
    }

    public function edit($id = null)
    {
        if (!in_array('updateUser', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

        if ($id) {
            $this->form_validation->set_rules(
                'username',
                'Username',
                'trim|required|min_length[5]|max_length[12]'
            );
            $this->form_validation->set_rules(
                'email',
                'Email',
                'trim|required'
            );
           

            if ($this->form_validation->run() == true) {
                // true case
                if (
                    empty($this->input->post('password')) &&
                    empty($this->input->post('cpassword'))
                ) {
                    $data = [
                        'username' => $this->input->post('username'),
                        'email' => $this->input->post('email'),
                    ];

                    $update = $this->Model_users->edit(
                        $data,
                        $id,
                        $this->input->post('groups')
                    );
                    if ($update == true) {
                        $this->session->set_flashdata(
                            'success',
                            'Successfully created'
                        );
                        redirect('users/', 'refresh');
                    } else {
                        $this->session->set_flashdata(
                            'errors',
                            'Error occurred!!'
                        );
                        redirect('users/edit/' . $id, 'refresh');
                    }
                } else {
                    $this->form_validation->set_rules(
                        'password',
                        'Password',
                        'trim|required|min_length[8]'
                    );
                    $this->form_validation->set_rules(
                        'cpassword',
                        'Confirm password',
                        'trim|required|matches[password]'
                    );

                    if ($this->form_validation->run() == true) {
                        $password = $this->password_hash(
                            $this->input->post('password')
                        );

                        $data = [
                            'username' => $this->input->post('username'),
                            'password' => $password,
                            'email' => $this->input->post('email'),
                            
                        ];

                        $update = $this->Model_users->edit(
                            $data,
                            $id,
                            $this->input->post('groups')
                        );
                        if ($update == true) {
                            $this->session->set_flashdata(
                                'success',
                                'Successfully updated'
                            );
                            redirect('users/', 'refresh');
                        } else {
                            $this->session->set_flashdata(
                                'errors',
                                'Error occurred!!'
                            );
                            redirect('users/edit/' . $id, 'refresh');
                        }
                    } else {
                        // false case
                        $user_data = $this->Model_users->getUserData($id);
                        $groups = $this->Model_users->getUserGroup($id);

                        $this->data['user_data'] = $user_data;
                        $this->data['user_group'] = $groups;

                        $group_data = $this->Model_groups->getGroupData();
                        $this->data['group_data'] = $group_data;

                        $this->render_template('users/edit', $this->data);
                    }
                }
            } else {
                // false case
                $user_data = $this->Model_users->getUserData($id);
                $groups = $this->Model_users->getUserGroup($id);

                $this->data[
                    'store_data'
                ] = $this->model_stores->getStoresData();

                $this->data['user_data'] = $user_data;
                $this->data['user_group'] = $groups;

                $group_data = $this->model_groups->getGroupData();
                $this->data['group_data'] = $group_data;

                $this->render_template('users/edit', $this->data);
            }
        }
    }

    // addtional details start

    function add()
    {
        // $data['class'] = $this->Users_model->get_all_users();
        // date_default_timezone_set("Asia/Kolkata");
        $this->form_validation->set_rules(
            'vision',
            'Vision',
            'required|max_length[500]'
        );
        $this->form_validation->set_rules(
            'mission',
            'mission',
            'required|max_length[500]'
        );
        $this->form_validation->set_rules(
            'pmessage',
            'pmessage',
            'required|max_length[2000]'
        );
        $this->form_validation->set_rules(
            'youtube',
            'youtube',
            'required|max_length[2000]'
        );
        $this->form_validation->set_rules(
            'fb',
            'Facebbok',
            'required|max_length[2000]'
        );
        $this->form_validation->set_rules(
            'linkdin',
            'Linkdin',
            'required|max_length[2000]'
        );
        $this->form_validation->set_rules(
            'weblink',
            'weblink',
            'required|max_length[2000]'
        );

        if (empty($_FILES['upload']['name'])) {
            $this->form_validation->set_rules(
                'attachment',
                'Document',
                'required'
            );
        }

        $config['upload_path'] = './notices/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_width'] = '128';
        $config['max_heigth'] = '128';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (
            $this->form_validation->run() == true &&
            $this->upload->do_upload('upload')
        ) {
            $this->upload->do_upload('upload');
            $data = $this->upload->data();
            if ($data['raw_name'] == null) {
                $notice = 0;
                $params = [
                    'vision' => $this->input->post('vision'),
                    'mission' => $this->input->post('mission'),
                    'pmessage' => $this->input->post('pmessage'),
                    'youtube' => $this->input->post('youtube'),
                    'fb' => $this->input->post('fb'),
                    'linkdin' => $this->input->post('linkdin'),
                    'weblink' => $this->input->post('weblink'),
                    'logo' => $notice,
                    'school_ID' => $this->session->userdata('id'),
                ];
                $this->Model_users->update_super_admin($params);
                $this->session->set_flashdata(
                    'success',
                    '<div class="alert alert-success">Details added successfully </div>'
                );
                redirect('Users/index');
            } else {
                $notice_img = base_url(
                    'notices/' . $data['raw_name'] . $data['file_ext']
                );
                $params = [
                    'vision' => $this->input->post('vision'),
                    'mission' => $this->input->post('mission'),
                    'pmessage' => $this->input->post('pmessage'),
                    'youtube' => $this->input->post('youtube'),
                    'fb' => $this->input->post('fb'),
                    'linkdin' => $this->input->post('linkdin'),
                    'weblink' => $this->input->post('weblink'),
                    'logo' => $notice_img,
                    'school_ID' => $this->session->userdata('id'),
                ];
                $this->Model_users->update_super_admin($params);
                $this->session->set_flashdata(
                    'success',
                    '<div class="alert alert-success">Details added successfully </div>'
                );
                redirect('Users/index');
            }
        } else {
            $this->session->set_flashdata(
                'danger',
                '<div class="alert alert-danger"> file is  required</div>',
                $this->upload->display_errors()
            );
            $this->load->view('include/header');
            $data['_view'] = 'users/additional';
            $this->load->view('users/additional', $data);
            $this->load->view('include/footer');
        }
    }

    //addtional details end

    public function delete($id)
    {
        if (!in_array('deleteUser', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

        if ($id) {
            if ($this->input->post('confirm')) {
                $delete = $this->Model_users->delete($id);
                if ($delete == true) {
                    $this->session->set_flashdata(
                        'success',
                        'Successfully removed'
                    );
                    redirect('users/', 'refresh');
                } else {
                    $this->session->set_flashdata('error', 'Error occurred!!');
                    redirect('users/delete/' . $id, 'refresh');
                }
            } else {
                $this->data['id'] = $id;
                $this->render_template('users/delete', $this->data);
            }
        }
    }

    public function profile()
    {
        if (!in_array('viewProfile', $this->permission)) {
        }

        $user_id = $this->session->userdata('id');

        $user_data = $this->Model_users->getUserData($user_id);
        $this->data['user_data'] = $user_data;
        $this->load->view('include/header');
        $this->load->view('users/profile', $this->data);
        $this->load->view('include/footer');
    }

    public function setting()
    {
        if (!in_array('updateSetting', $this->permission)) {
        }

        $id = $this->session->userdata('id');

        if ($id) {
            $this->form_validation->set_rules(
                'username',
                'Username',
                'trim|required|min_length[5]|max_length[12]'
            );
            $this->form_validation->set_rules(
                'email',
                'Email',
                'trim|required'
            );
           

            if ($this->form_validation->run() == true) {
                // true case
                if (
                    empty($this->input->post('password')) &&
                    empty($this->input->post('cpassword'))
                ) {
                    $data = [
                        'username' => $this->input->post('username'),
                        'email' => $this->input->post('email'),
                       
                    ];

                    $update = $this->Model_users->edit(
                        $data,
                        $id,
                        $this->input->post('groups')
                    );
                    if ($update == true) {
                        $this->session->set_flashdata(
                            'success',
                            'Successfully updated'
                        );
                        redirect('users/setting/', 'refresh');
                    } else {
                        $this->session->set_flashdata(
                            'errors',
                            'Error occurred!!'
                        );
                        redirect('users/setting/', 'refresh');
                    }
                } else {
                    $this->form_validation->set_rules(
                        'password',
                        'Password',
                        'trim|required|min_length[8]'
                    );
                    $this->form_validation->set_rules(
                        'cpassword',
                        'Confirm password',
                        'trim|required|matches[password]'
                    );

                    if ($this->form_validation->run() == true) {
                        $password = $this->password_hash(
                            $this->input->post('password')
                        );

                        $data = [
                            'username' => $this->input->post('username'),
                            'email' => $this->input->post('email'),
                            'password' => $password,
                        ];

                        $update = $this->Model_users->edit(
                            $data,
                            $id,
                            $this->input->post('groups')
                        );
                        if ($update == true) {
                            $this->session->set_flashdata(
                                'success',
                                'Successfully updated'
                            );
                            redirect('users/setting/', 'refresh');
                        } else {
                            $this->session->set_flashdata(
                                'errors',
                                'Error occurred!!'
                            );
                            redirect('users/setting/', 'refresh');
                        }
                    } else {
                        $this->load->view('include/header');
                        $user_data = $this->Model_users->getUserData($id);
                        $this->data['user_data'] = $user_data;
                        $this->load->view('users/setting', $this->data);
                        $this->load->view('include/footer');
                    }
                }
            } else {
                // false case
                $user_data = $this->Model_users->getUserData($id);
                $this->data['user_data'] = $user_data;
                $this->load->view('include/header');
                $this->load->view('users/setting', $this->data);
                $this->load->view('include/footer');
            }
        }
    }
}
