<?php

class Evis_App_Model extends CI_Model {
    
    public function admin_login_check($data)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_email', $data['admin_email']);
        $this->db->where('admin_password', ($data['admin_password']));
        $this->db->where('admin_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    public function make_admin_online()
    {
        $sql = "UPDATE tbl_online SET online_status='1'";
        $this->db->query($sql);
    }
    
    public function make_admin_offline()
    {
        $sql = "UPDATE tbl_online SET online_status='0'";
        $this->db->query($sql);
    }
    
    public function make_read_chat($user_id)
    {
        $sql = "UPDATE tbl_chat SET show_status='0' WHERE user_id='$user_id'";
        $this->db->query($sql);
    }
    
    public function select_online_status()
    {
        $this->db->select('*');
        $this->db->from('tbl_online');
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    public function select_chat_notification()
    {
        $sql = "SELECT SUM(show_status) AS notification_number FROM tbl_chat";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
    
    public function select_unread_chat()
    {
        $sql = "SELECT u.username,c.user_id FROM tbl_chat AS c, tbl_user AS u WHERE c.user_id=u.user_id AND c.show_status='1' ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_new_comment()
    {
        $this->db->select('*');
        $this->db->from('tbl_comment');
        $this->db->where('comment_status', 0);
        $this->db->order_by('comment_id', 'desc');
        $this->db->limit(10);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_new_user()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_status', 0);
        $this->db->order_by('user_id', 'desc');
        $this->db->limit(10);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function save_admin_info()
    {
        $data = array();
        $data['admin_name'] = $this->input->post('admin_name', true);
        $data['admin_email'] = $this->input->post('admin_email', true);
        $data['admin_password'] = $this->input->post('admin_password', true);
        $data['admin_level'] = $this->input->post('admin_level', true);
        $data['admin_status'] = $this->input->post('admin_status', true);
        $this->db->insert('tbl_admin',$data);
    }
    
    public function select_all_admin($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_admin LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function deactive_admin_by_id($admin_id)
    {
        $this->db->set('admin_status',0);
        $this->db->where('admin_id',$admin_id);
        $this->db->update('tbl_admin');
    }
    
    public function active_admin_by_id($admin_id)
    {
        $this->db->set('admin_status',1);
        $this->db->where('admin_id',$admin_id);
        $this->db->update('tbl_admin');
    }
    
    public function select_admin_by_id($admin_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_id',$admin_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_admin_info()
    {
        $data=array();
        $data['admin_name'] = $this->input->post('admin_name', true);
        $data['admin_email'] = $this->input->post('admin_email', true);
        $data['admin_level'] = $this->input->post('admin_level', true);
        $data['admin_status'] = $this->input->post('admin_status', true);
        $data['admin_password'] = $this->input->post('admin_password', true);
        $admin_id=$this->input->post('admin_id',true);
        $this->db->where('admin_id',$admin_id);
        $this->db->update('tbl_admin',$data);
    }
    
    public function delete_admin_by_id($admin_id)
    {
        $this->db->where('admin_id',$admin_id);
        $this->db->delete('tbl_admin');
    }
    
    public function save_tour_info($data)
    {
        $this->db->insert('tbl_tour',$data);
    }
    
    public function select_all_tour($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_tour ORDER BY tour_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function deactive_tour_by_id($tour_id)
    {
        $this->db->set('tour_status',0);
        $this->db->where('tour_id',$tour_id);
        $this->db->update('tbl_tour');
    }
    
    public function active_tour_by_id($tour_id)
    {
        $this->db->set('tour_status',1);
        $this->db->where('tour_id',$tour_id);
        $this->db->update('tbl_tour');
    }
    
    public function select_tour_by_id($tour_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_tour');
        $this->db->where('tour_id',$tour_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_tour_info()
    {
        $data=array();
        $data['tour_type'] = $this->input->post('tour_type', true);
        $data['tour_title'] = $this->input->post('tour_title', true);
        $data['tour_summary'] = $this->input->post('tour_summary', true);
        $data['tour_price'] = $this->input->post('tour_price', true);
        $data['tour_subtitle'] = $this->input->post('tour_subtitle', true);
        $data['tour_description'] = $this->input->post('tour_description', true);
        $data['tour_itinerary'] = $this->input->post('tour_itinerary', true);
        $data['tour_pricing'] = $this->input->post('tour_pricing', true);
        $data['tour_remarks'] = $this->input->post('tour_remarks', true);
        $data['tour_status'] = $this->input->post('tour_status', true);
        $tour_id=$this->input->post('tour_id',true);
        $this->db->where('tour_id',$tour_id);
        $this->db->update('tbl_tour',$data);
    }
    
    public function delete_tour_by_id($tour_id)
    {
        $this->db->where('tour_id',$tour_id);
        $this->db->delete('tbl_tour');
    }
    
    public function save_blog_info($data)
    {
        $this->db->insert('tbl_blog',$data);
    }
    
    public function select_all_blog($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_blog ORDER BY blog_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function deactive_blog_by_id($blog_id)
    {
        $this->db->set('blog_status',0);
        $this->db->where('blog_id',$blog_id);
        $this->db->update('tbl_blog');
    }
    
    public function active_blog_by_id($blog_id)
    {
        $this->db->set('blog_status',1);
        $this->db->where('blog_id',$blog_id);
        $this->db->update('tbl_blog');
    }
    
    public function select_blog_by_id($blog_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('blog_id',$blog_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_blog_info()
    {
        $data=array();
        $data['blog_title'] = $this->input->post('blog_title', true);
        $data['blog'] = $this->input->post('blog', true);
        $data['blog_status'] = $this->input->post('blog_status', true);
        $blog_id=$this->input->post('blog_id',true);
        $this->db->where('blog_id',$blog_id);
        $this->db->update('tbl_blog',$data);
    }
    
    public function delete_blog_by_id($blog_id)
    {
        $this->db->where('blog_id',$blog_id);
        $this->db->delete('tbl_blog');
    }
    
    public function save_gallery_info($data)
    {
        $this->db->insert('tbl_gallery',$data);
    }
    
    public function select_all_gallery($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_gallery ORDER BY gallery_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function delete_gallery_by_id($gallery_id)
    {
        $this->db->where('gallery_id',$gallery_id);
        $this->db->delete('tbl_gallery');
    }
      
    public function select_all_chat()
    {
        $sql = "SELECT user_message,username FROM tbl_user_message AS m, tbl_chat AS c, tbl_user AS u WHERE u.user_id=c.user_id AND m.user_id=c.user_id";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
            
    public function save_chat_info($user_id,$admin_message)
    {
        $data = array();
        $data['user_id'] = $user_id;
        $data['admin_message'] = str_replace('%20', ' ', $admin_message);
        $this->db->insert('tbl_chat',$data);
    }

    public function delete_chat_by_id($user_id)
    {
        $this->db->where('user_id',$user_id);
        $this->db->delete('tbl_chat');
    }
    
    public function select_all_user($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_user ORDER BY user_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function deactive_user_by_id($user_id)
    {
        $this->db->set('user_status',0);
        $this->db->where('user_id',$user_id);
        $this->db->update('tbl_user');
    }
    
    public function active_user_by_id($user_id)
    {
        $this->db->set('user_status',1);
        $this->db->where('user_id',$user_id);
        $this->db->update('tbl_user');
    }
    
    public function select_user_by_id($user_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_id',$user_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_user_info()
    {
        $data=array();
        $data['username'] = $this->input->post('username', true);
        $data['email'] = $this->input->post('email', true);
        $data['user_status'] = $this->input->post('user_status', true);
        $user_id=$this->input->post('user_id',true);
        $this->db->where('user_id',$user_id);
        $this->db->update('tbl_user',$data);
    }
    
    public function delete_user_by_id($user_id)
    {
        $this->db->where('user_id',$user_id);
        $this->db->delete('tbl_user');
    }
    
    public function select_all_comment($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_comment AS c, tbl_user AS u, tbl_blog AS b WHERE c.user_id=u.user_id AND c.blog_id=b.blog_id ORDER BY blog_title LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function deactive_comment_by_id($comment_id)
    {
        $this->db->set('comment_status',0);
        $this->db->where('comment_id',$comment_id);
        $this->db->update('tbl_comment');
    }
    
    public function active_comment_by_id($comment_id)
    {
        $this->db->set('comment_status',1);
        $this->db->where('comment_id',$comment_id);
        $this->db->update('tbl_comment');
    }
        
    public function delete_comment_by_id($comment_id)
    {
        $this->db->where('comment_id',$comment_id);
        $this->db->delete('tbl_comment');
    }
    
    public function select_all_subscribe($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_newsletter_subscription ORDER BY subscription_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function deactive_subscription_by_id($subscription_id)
    {
        $this->db->set('subscription_status',0);
        $this->db->where('subscription_id',$subscription_id);
        $this->db->update('tbl_newsletter_subscription');
    }
    
    public function active_subscription_by_id($subscription_id)
    {
        $this->db->set('subscription_status',1);
        $this->db->where('subscription_id',$subscription_id);
        $this->db->update('tbl_newsletter_subscription');
    }
    
    public function delete_subscription_by_id($subscription_id)
    {
        $this->db->where('subscription_id',$subscription_id);
        $this->db->delete('tbl_newsletter_subscription');
    }
    
    public function select_subscribe_list()
    {
        $sql = "SELECT * FROM tbl_newsletter_subscription WHERE subscription_status='1'";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
}