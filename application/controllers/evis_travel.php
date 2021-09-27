<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Evis_Travel extends CI_Controller {

    public function index() 
    {
        $data = array();
        $data['title'] = 'Evis Travel Website';
        $data['all_tour'] = $this->evis_travel_model->select_all_tour();
        $data['recent_blog'] = $this->evis_travel_model->select_recent_blog();
        $data['content'] = $this->load->view('home', $data, true);
        $this->load->view('master', $data);
    }
    
    public function chat() 
    {
        $user_id = $this->session->userdata('user_id');        
        $data = array();
        $data['title'] = 'Chat With Us';
        $data['online_status'] = $this->evis_app_model->select_online_status();
        $data['select_user_chat'] = $this->evis_travel_model->select_user_chat($user_id);
        $this->load->view('chat', $data);
    }

    public function save_chat($user_id,$user_message)
    {   
        $data = array();
        $this->evis_travel_model->save_chat_info($user_id,$user_message);
        $data['select_user_chat'] = $this->evis_travel_model->select_user_chat($user_id);
        $data['select_admin_chat'] = $this->evis_travel_model->select_admin_chat($user_id);
        echo $this->load->view('chat_information',$data);
    }
    
    public function show_chat($user_id)
    {   
        $data = array();
        $data['select_user_chat'] = $this->evis_travel_model->select_user_chat($user_id);
        $data['select_admin_chat'] = $this->evis_travel_model->select_admin_chat($user_id);
        echo $this->load->view('chat_information',$data);
    }
    
    public function save_subscription()
    {   
        $this->evis_travel_model->save_subscription_info();
        redirect('evis_travel/newsletter_subscription_success');
    }
    
    public function newsletter_subscription_success()
    {
        $data = array();
        $data['title'] = 'Success';
        $this->load->view('newsletter_subscription_success', $data);
    }
    
    public function tours()
    {
        $data = array();
        $data['title'] = 'Our Tours';
        $data['all_tour'] = $this->evis_travel_model->select_all_our_tour();
        $this->load->view('tours', $data);
    }
    
    public function tour_details($tour_id)
    {
        $data = array();
        $data['title'] = 'Tour Details';
        $data['tour_details'] = $this->evis_travel_model->select_tour_details_by_id($tour_id);
        $this->load->view('tour_details', $data);
    }
    
    public function day_trips()
    {
        $data = array();
        $data['title'] = 'Day Trips';
        $data['all_tour'] = $this->evis_travel_model->select_all_day_trips();
        $this->load->view('day_trips', $data);
    }
    
    public function blog()
    {
        $data = array();
        $data['title'] = 'Blog';
        $data['new_blog'] = $this->evis_travel_model->select_new_blog();
        $data['popular_post'] = $this->evis_travel_model->select_popular_post();
        $this->load->view('blog', $data);
    }
    
    public function save_user()
    {
        $data = array();
        $data['username'] = $this->input->post('username', true);
        $data['email'] = $this->input->post('email', true);
        $data['password'] = $this->input->post('password', true);
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                /** START IMAGE RESIZE **/
                $config['upload_path'] = 'upload_images/user_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('user_image')) {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } else {
                    $fdata = $this->upload->data();
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_images/user_image/';
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
                    $index = 'user_image';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                }
                /** END IMAGE RESIZE **/
            }
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $this->evis_travel_model->save_user_info($data);
        $sdata = array();
        $sdata['message'] = 'Success!';
        $this->session->set_userdata($sdata);
        redirect('evis_travel/newsletter_subscription_success');
    }
    
    public function blog_details($blog_id)
    {
        $data = array();
        $data['title'] = 'Blog Details';
        $data['all_comment'] = $this->evis_travel_model->select_all_comment($blog_id);
        $data['popular_post'] = $this->evis_travel_model->select_popular_post();
        $data['comment_number'] = $this->evis_travel_model->select_comment_number($blog_id);
        $data['blog_details'] = $this->evis_travel_model->select_blog_by_id($blog_id);
        $this->load->view('blog_details', $data);
    }
    
    public function save_comment()
    {
        $this->evis_travel_model->save_comment_info();
        $sdata = array();
        $sdata['comment'] = 'Your comment is awaiting for approval';
        $this->session->set_userdata($sdata);
        redirect('evis_travel/blog');
    }
    
    public function save_reply($blog_id)
    {
        $this->evis_travel_model->save_reply_info();
        $data = array();
        $data['title'] = 'Blog Details';
        $data['all_comment'] = $this->evis_travel_model->select_all_comment($blog_id);
        $data['popular_post'] = $this->evis_travel_model->select_popular_post();
        $data['comment_number'] = $this->evis_travel_model->select_comment_number($blog_id);
        $data['blog_details'] = $this->evis_travel_model->select_blog_by_id($blog_id);
        $this->load->view('blog_details', $data);
    }

    public function gallery()
    {
        $data = array();
        $data['title'] = 'Gallery';
        $data['gallery'] = $this->evis_travel_model->select_all_gallery();
        $this->load->view('gallery', $data);
    }
    
    public function about_us()
    {
        $data = array();
        $data['title'] = 'About Us';
        $this->load->view('about_us', $data);
    }
    
    public function contact_us()
    {
        $data = array();
        $data['title'] = 'Contact Us';
        $this->load->view('contact_us', $data);
    }
    
    public function send_mail()
    {
        $data = array();
        $data['name'] = $this->input->post('name', true);
        $data['email'] = $this->input->post('email', true);
        $data['message_title'] = $this->input->post('message_title', true);
        $data['message'] = $this->input->post('message', true);
        $mdata = array();
        $mdata['from_address'] = $data['email'];
        $mdata['admin_full_name'] = 'Travel Geek BD';
        $mdata['to_address'] = 'info@travelgeekbd.com';
        $mdata['subject'] = 'Contact Form';
        $mdata['name'] = $data['name'];
        $mdata['message'] = $data['message'];
        $mdata['message_title'] = $data['message_title'];
        $this->mailer_model->contact_us($mdata, 'contact_us_form');
        redirect('evis_travel/newsletter_subscription_success');
    }
}