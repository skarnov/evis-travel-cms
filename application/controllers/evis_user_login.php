<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Evis_User_Login extends CI_Controller {
        
    public function failed()
    {
        $data = array();
        $data['title'] = 'Login Failed';
        $this->load->view('failed', $data);
    }
    
    public function check_user_login()
    {
        $data = array();
        $data['email'] = $this->input->post('email', true);
        $data['password'] = $this->input->post('password', true);
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[250]|xss_clean');
        if($this->form_validation->run() == False)
        {
            $this->load->view('home');
        }
        else
        {
            $result = $this->evis_travel_model->user_login_check($data);
            $sdata = array();
            if ($result)
            {
                $sdata['user_id'] = $result->user_id;
                $sdata['username'] = $result->username;
                $this->session->set_userdata($sdata);
                redirect('evis_travel');
            } 
            else
            {
                redirect('evis_user_login/failed');
            }
        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('evis_travel');
    }
}