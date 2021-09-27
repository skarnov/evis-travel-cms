<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Evis_App extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) 
        {
            redirect('evis_login', 'refresh');
        }
    }
    
    public function editor($path,$width)
    {
        $this->load->library('ckeditor');
        $this->load->library('ckFinder');
        $this->ckeditor->basePath = base_url().'assets/private/js/ckeditor/';
        $this->ckeditor-> config['toolbar'] = 'Full';
        $this->ckeditor->config['language'] = 'en';
        $this->ckeditor-> config['width'] = $width;
        $this->ckfinder->SetupCKEditor($this->ckeditor,$path); 
    }

    public function index() 
    {
        $data = array();
        $data['title'] = 'Evis Dashboard';
        $this->evis_app_model->make_admin_online();
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['new_comment'] = $this->evis_app_model->select_new_comment();
        $data['new_user'] = $this->evis_app_model->select_new_user();
        $data['dashboard'] = $this->load->view('admin/dashboard', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $sdata['exception'] = 'You are Successfully Logout ';
        $this->session->set_userdata($sdata);
        $this->evis_app_model->make_admin_offline();
        redirect('evis_login');
    }

    public function add_admin() 
    {
        $data = array();
        $data['title'] = 'Add Admin';
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['dashboard'] = $this->load->view('admin/add_admin', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function save_admin()
    {
        $this->form_validation->set_rules('admin_password', 'Password', 'trim|required|min_length[6]|max_length[250]|matches[conform_password]|xss_clean');
        $this->form_validation->set_rules('conform_password', 'Password Confirmation', 'trim|required');
        if ($this->form_validation->run() == False)
        {
            $data = array();
            $data['title'] = 'Password Did Not Match';
            $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
            $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
            $data['online_status'] = $this->evis_app_model->select_online_status();
            $data['dashboard'] = $this->load->view('add_admin', $data, true);
            $this->load->view('admin', $data);
        } 
        else 
        {
            $data['admin_status'] = $this->input->post('admin_status', true);
            $this->evis_app_model->save_admin_info($data);
            if ($data['admin_status'] == '1') 
            {
                $sdata = array();
                $sdata['message'] = 'Admin Active';
                $this->session->set_userdata($sdata);
            }
            if ($data['admin_status'] == '0')
            {
                $sdata = array();
                $sdata['message'] = 'Admin Info Saved';
                $this->session->set_userdata($sdata);
            }
            redirect('evis_app/add_admin');
        }
    }

    public function manage_admin()
    {
        $data = array();
        $data['title'] = 'Manage Admin';
        $config['base_url'] = base_url() . 'evis_app/manage_admin/';
        $config['total_rows'] = $this->db->count_all('tbl_admin');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['all_admin'] = $this->evis_app_model->select_all_admin($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_admin', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function deactive_admin($admin_id) 
    {
        $this->evis_app_model->deactive_admin_by_id($admin_id);
        redirect('evis_app/manage_admin');
    }

    public function active_admin($admin_id)
    {
        $this->evis_app_model->active_admin_by_id($admin_id);
        redirect('evis_app/manage_admin');
    }

    public function edit_admin($admin_id) 
    {
        $data = array();
        $data['title'] = 'Edit Admin';
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['admin_info'] = $this->evis_app_model->select_admin_by_id($admin_id);
        $data['dashboard'] = $this->load->view('admin/edit_admin', $data, true);
        $sdata = array();
        $sdata['message'] = 'Update Admin Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }

    public function update_admin() 
    {
        $this->evis_app_model->update_admin_info();
        redirect('evis_app/manage_admin');
    }

    public function delete_admin($admin_id) 
    {
        $this->evis_app_model->delete_admin_by_id($admin_id);
        redirect('evis_app/manage_admin');
    }
    
    public function add_tour() 
    {
        $data = array();
        $path = '../js/ckfinder';
        $width = '820px';
        $this->editor($path, $width);
        $data['title'] = 'Add Tour';
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['dashboard'] = $this->load->view('admin/add_tour', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function save_tour()
    {
        $data = array();
        $data['tour_type'] = $this->input->post('tour_type', true);
        $data['tour_title'] = $this->input->post('tour_title', true);
        $data['tour_summary'] = $this->input->post('tour_summary', true);
        $data['tour_price'] = $this->input->post('tour_price', true);
        $data['tour_subtitle'] = $this->input->post('tour_subtitle', true);
        $data['tour_description'] = $this->input->post('tour_description', true);
        $data['tour_itinerary'] = $this->input->post('tour_itinerary', true);
        /**START IMAGE UPLOAD**/
        $cnt = 0;
        foreach ($_FILES as $eachFile)
        {
            if ($eachFile['size'] > 0)
            {
                $config['upload_path'] = 'upload_images/tour_additional_image_' . $cnt . '/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('tour_additional_image_' . $cnt))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'tour_additional_image_' . $cnt;
                    $data[$index] = $config['upload_path'] . $fdata['file_name'];
                }
                $cnt++;
            }
        }
        /**END IMAGE UPLOAD**/
        $data['tour_pricing'] = $this->input->post('tour_pricing', true);
        $data['tour_remarks'] = $this->input->post('tour_remarks', true);
        $data['tour_status'] = $this->input->post('tour_status', true);
        $this->evis_app_model->save_tour_info($data);
        if ($data['tour_status'] == '1') 
        {
            $sdata = array();
            $sdata['message'] = 'Tour Published';
            $this->session->set_userdata($sdata);
        }
        if ($data['tour_status'] == '0')
        {
            $sdata = array();
            $sdata['message'] = 'Tour Info Saved';
            $this->session->set_userdata($sdata);
        }
        redirect('evis_app/add_tour');
    }

    public function manage_tour()
    {
        $data = array();
        $data['title'] = 'Manage Tour';
        $config['base_url'] = base_url() . 'evis_app/manage_tour/';
        $config['total_rows'] = $this->db->count_all('tbl_tour');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['all_tour'] = $this->evis_app_model->select_all_tour($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_tour', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function deactive_tour($tour_id) 
    {
        $this->evis_app_model->deactive_tour_by_id($tour_id);
        redirect('evis_app/manage_tour');
    }

    public function active_tour($tour_id)
    {
        $this->evis_app_model->active_tour_by_id($tour_id);
        redirect('evis_app/manage_tour');
    }
    
    public function edit_tour($tour_id) 
    {
        $data = array();
        $path = '../js/ckfinder';
        $width = '820px';
        $this->editor($path, $width);
        $data['title'] = 'Edit Tour';
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['tour_info'] = $this->evis_app_model->select_tour_by_id($tour_id);
        $data['dashboard'] = $this->load->view('admin/edit_tour', $data, true);
        $sdata = array();
        $sdata['message'] = 'Update Tour Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }

    public function update_tour() 
    {
        $this->evis_app_model->update_tour_info();
        redirect('evis_app/manage_tour');
    }

    public function delete_tour($tour_id) 
    {
        $this->evis_app_model->delete_tour_by_id($tour_id);
        redirect('evis_app/manage_tour');
    }
    
    public function add_blog()
    {
        $data = array();
        $path = '../js/ckfinder';
        $width = '850px';
        $this->editor($path, $width);
        $data['title'] = 'Add Blog';
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['dashboard'] = $this->load->view('admin/add_blog', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function save_blog()
    {        
        $data = array();
        $data['admin_id'] = $this->session->userdata('admin_id');
        $data['blog_title'] = $this->input->post('blog_title', true);
        $data['blog'] = $this->input->post('blog', true);
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                /** START IMAGE RESIZE **/
                $config['upload_path'] = 'upload_images/blog_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('blog_image')) {
                        $error = $this->upload->display_errors();
                        echo $error;
                        exit();
                } else {
                        $fdata = $this->upload->data();
                        $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_images/blog_image/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = true;
                $config['width'] = '270';
                $config['height'] = '329';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                        $error = $this->image_lib->display_errors();
                        echo $error;
                        exit();
                } else {
                        $index = 'blog_image';
                        $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                        unlink($fdata['full_path']);
                        }
                /** END IMAGE RESIZE **/
            }
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $data['blog_status'] = $this->input->post('blog_status', true);
        $this->evis_app_model->save_blog_info($data);
        if ($data['blog_status'] == '1') 
        {
            $sdata = array();
            $sdata['message'] = 'Blog Saved & Published';
            $this->session->set_userdata($sdata);
        }
        if ($data['blog_status'] == '0')
        {
            $sdata = array();
            $sdata['message'] = 'Blog Saved';
            $this->session->set_userdata($sdata);
        }
        redirect('evis_app/add_blog');
    }

    public function manage_blog()
    {
        $data = array();
        $data['title'] = 'Manage Blog';
        $config['base_url'] = base_url() . 'evis_app/manage_blog/';
        $config['total_rows'] = $this->db->count_all('tbl_blog');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['all_blog'] = $this->evis_app_model->select_all_blog($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_blog', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function deactive_blog($blog_id) 
    {
        $this->evis_app_model->deactive_blog_by_id($blog_id);
        redirect('evis_app/manage_blog');
    }

    public function active_blog($blog_id)
    {
        $this->evis_app_model->active_blog_by_id($blog_id);
        redirect('evis_app/manage_blog');
    }

    public function edit_blog($blog_id) 
    {
        $data = array();
        $path = '../js/ckfinder';
        $width = '850px';
        $this->editor($path, $width);
        $data['title'] = 'Edit Blog';
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['blog_info'] = $this->evis_app_model->select_blog_by_id($blog_id);
        $data['dashboard'] = $this->load->view('admin/edit_blog', $data, true);
        $sdata = array();
        $sdata['message'] = 'Update Blog Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }

    public function update_blog() 
    {
        $this->evis_app_model->update_blog_info();
        redirect('evis_app/manage_blog');
    }

    public function delete_blog($blog_id) 
    {
        $this->evis_app_model->delete_blog_by_id($blog_id);
        redirect('evis_app/manage_blog');
    }
    
    public function add_gallery()
    {
        $data = array();
        $data['title'] = 'Add Gallery';
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['dashboard'] = $this->load->view('admin/add_gallery', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_gallery()
    {        
        $data = array();
        $config['upload_path'] = 'upload_images/gallery/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '10240';
        $config['max_width']  = '5000';
        $config['max_height']  = '5000';
        $error='';
        $fdata=array();
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('gallery'))
        {
            $error = $this->upload->display_errors();
            echo $error;
            exit();
        }
        else
        {
            $fdata = $this->upload->data();
            $data['gallery']=$config['upload_path'].$fdata['file_name'];
        }
        $this->evis_app_model->save_gallery_info($data);
        $sdata = array();
        $sdata['gallery'] = 'Saved Gallery Image';
        $this->session->set_userdata($sdata);
        redirect('evis_app/add_gallery');
    }

    public function manage_gallery()
    {
        $data = array();
        $data['title'] = 'Manage Gallery';
        $config['base_url'] = base_url() . 'evis_app/manage_gallery/';
        $config['total_rows'] = $this->db->count_all('tbl_gallery');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['all_gallery'] = $this->evis_app_model->select_all_gallery($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_gallery', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function delete_gallery($gallery_id) 
    {
        $this->evis_app_model->delete_gallery_by_id($gallery_id);
        redirect('evis_app/manage_gallery');
    }
    
    public function manage_chat()
    {
        $data = array();
        $data['title'] = 'Manage Chat';
        $config['base_url'] = base_url() . 'evis_app/manage_user/';
        $config['total_rows'] = $this->db->count_all('tbl_user');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['all_user'] = $this->evis_app_model->select_all_user($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_chat', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function start_chat($user_id) 
    {      
        $data = array();
        $data['title'] = 'Chat With Us';
        $data['user_id'] = $user_id;
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['select_user_chat'] = $this->evis_travel_model->select_user_chat($user_id);
        $data['select_admin_chat'] = $this->evis_travel_model->select_admin_chat($user_id);
        $data['read_chat'] = $this->evis_app_model->make_read_chat($user_id);
        $data['dashboard'] = $this->load->view('admin/admin_chat', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_chat($user_id,$admin_message)
    {   
        $data = array();
        $this->evis_app_model->save_chat_info($user_id,$admin_message);
        $data['select_user_chat'] = $this->evis_travel_model->select_user_chat($user_id);
        $data['select_admin_chat'] = $this->evis_travel_model->select_admin_chat($user_id);
        echo $this->load->view('admin/chat_information',$data);
    }
    
    public function show_chat($user_id)
    {   
        $data = array();
        $data['select_user_chat'] = $this->evis_travel_model->select_user_chat($user_id);
        $data['select_admin_chat'] = $this->evis_travel_model->select_admin_chat($user_id);
        echo $this->load->view('admin/chat_information',$data);
    }
    
    public function delete_chat($user_id) 
    {
        $this->evis_app_model->delete_chat_by_id($user_id);
        redirect('evis_app/start_chat');
    }
    
    public function manage_user()
    {
        $data = array();
        $data['title'] = 'Manage User';
        $config['base_url'] = base_url() . 'evis_app/manage_user/';
        $config['total_rows'] = $this->db->count_all('tbl_user');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['all_user'] = $this->evis_app_model->select_all_user($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_user', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function deactive_user($user_id) 
    {
        $this->evis_app_model->deactive_user_by_id($user_id);
        redirect('evis_app/manage_user');
    }

    public function active_user($user_id)
    {
        $this->evis_app_model->active_user_by_id($user_id);
        redirect('evis_app/manage_user');
    }

    public function edit_user($user_id) 
    {
        $data = array();
        $data['title'] = 'Edit User';
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['user_info'] = $this->evis_app_model->select_user_by_id($user_id);
        $data['dashboard'] = $this->load->view('admin/edit_user', $data, true);
        $sdata = array();
        $sdata['message'] = 'Update user Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }

    public function update_user() 
    {
        $this->evis_app_model->update_user_info();
        redirect('evis_app/manage_user');
    }

    public function delete_user($user_id) 
    {
        $this->evis_app_model->delete_user_by_id($user_id);
        redirect('evis_app/manage_user');
    }
    
    public function manage_comment()
    {
        $data = array();
        $data['title'] = 'Manage Comment';
        $config['base_url'] = base_url() . 'evis_app/manage_comment/';
        $config['total_rows'] = $this->db->count_all('tbl_comment');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['all_comment'] = $this->evis_app_model->select_all_comment($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_comment', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function deactive_comment($comment_id) 
    {
        $this->evis_app_model->deactive_comment_by_id($comment_id);
        redirect('evis_app/manage_comment');
    }

    public function active_comment($comment_id)
    {
        $this->evis_app_model->active_comment_by_id($comment_id);
        redirect('evis_app/manage_comment');
    }

    public function delete_comment($comment_id) 
    {
        $this->evis_app_model->delete_comment_by_id($comment_id);
        redirect('evis_app/manage_comment');
    }
    
    public function send_newsletter()
    {
        $data = array();
        $data['title'] = 'Send Newsletter';
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['dashboard'] = $this->load->view('admin/send_newsletter', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function send_newsletter_mail()
    {
        $all_subscribe = $this->evis_app_model->select_subscribe_list();
        $subject = $this->input->post('subject', true);
        $message = $this->input->post('message', true);
        foreach($all_subscribe as $value){
          $mdata = array();
          $mdata['from_address'] = 'info@evistechnology.com';
          $mdata['to_address'] = $value->subscription_email;
          $mdata['admin_full_name'] = 'Evis Technology';
          $mdata['subject'] = $subject;
          $mdata['message'] = $message;
          $this->mailer_model->send_newsletter($mdata, 'newsletter');
        }
        $data = array();
        $data['title'] = 'Evis Technology';
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['dashboard'] = $this->load->view('admin/success', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function subscribe_email()
    {
        $data = array();
        $data['title'] = 'Subscribe Email';
        $config['base_url'] = base_url() . 'evis_app/subscribe_email/';
        $config['total_rows'] = $this->db->count_all('tbl_newsletter_subscription');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['all_subscribe'] = $this->evis_app_model->select_all_subscribe($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/subscribe_email', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function deactive_subscription($subscription_id) 
    {
        $this->evis_app_model->deactive_subscription_by_id($subscription_id);
        redirect('evis_app/subscribe_email');
    }

    public function active_subscription($subscription_id)
    {
        $this->evis_app_model->active_subscription_by_id($subscription_id);
        redirect('evis_app/subscribe_email');
    }
    
    public function delete_subscription($subscription_id) 
    {
        $this->evis_app_model->delete_subscription_by_id($subscription_id);
        redirect('evis_app/subscribe_email');
    }

    public function about()
    {
        $data = array();
        $data['title'] = 'Evis Technology';
        $data['chat_notification'] = $this->evis_app_model->select_chat_notification();
        $data['unread_chat'] = $this->evis_app_model->select_unread_chat();
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['dashboard'] = $this->load->view('admin/about', $data, true);
        $this->load->view('admin/master', $data);
    }
}