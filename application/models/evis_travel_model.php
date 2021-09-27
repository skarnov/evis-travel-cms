<?php

class Evis_Travel_Model extends CI_Model {
    
    public function user_login_check($data)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('email', $data['email']);
        $this->db->where('password', $data['password']);
        $this->db->where('user_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    public function select_all_tour()
    {
        $this->db->select('*');
        $this->db->from('tbl_tour');
        $this->db->where('tour_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_all_our_tour()
    {
        $this->db->select('*');
        $this->db->from('tbl_tour');
        $this->db->where('tour_status',1);
        $this->db->where('tour_type',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_all_day_trips()
    {
        $this->db->select('*');
        $this->db->from('tbl_tour');
        $this->db->where('tour_status',1);
        $this->db->where('tour_type',2);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_tour_details_by_id($tour_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_tour');
        $this->db->where('tour_id',$tour_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function select_recent_blog()
    {
        $sql = "SELECT LEFT(blog, 200) AS blog, blog_id, blog_title, blog_image, blog_status, blog_time, admin_name FROM tbl_blog AS b, tbl_admin AS a WHERE b.admin_id=a.admin_id AND blog_status=1 ORDER BY blog_id DESC LIMIT 1";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function save_chat_info($user_id,$user_message)
    {
        $data = array();
        $data['user_id'] = $user_id;
        $data['user_message'] = str_replace('%20', ' ', $user_message);
        $data['show_status'] = 1;
        $this->db->insert('tbl_chat',$data);
    }
    
    public function select_user_chat($user_id)
    {
        $sql = "SELECT * FROM tbl_chat AS c, tbl_user AS u WHERE c.user_id='$user_id' AND c.user_id=u.user_id";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_admin_chat($user_id)
    {
        $sql = "SELECT * FROM tbl_chat AS c, tbl_user AS u WHERE c.user_id='$user_id' AND c.user_id=u.user_id";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function save_user_info($data)
    {
        $this->db->insert('tbl_user',$data);
    }
    
    public function select_new_blog()
    {
        $sql = "SELECT LEFT(blog, 200) AS blog, blog_id, blog_title, blog_image, blog_status, blog_time, admin_name FROM tbl_blog AS b, tbl_admin AS a WHERE b.admin_id=a.admin_id AND blog_status=1 ORDER BY blog_id DESC";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_popular_post()
    {
        $sql = "SELECT LEFT(b.blog_title, 30) AS blog_title, b.blog_id, b.blog, b.blog_image, b.blog_status, COUNT(c.blog_id) AS max FROM tbl_comment AS c, tbl_blog AS b WHERE c.blog_id=b.blog_id AND blog_status=1 GROUP BY c.blog_id ORDER BY max DESC";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function save_subscription_info()
    {
        $data = array();
        $data['subscription_email'] = $this->input->post('subscription_email', true);
        $this->db->insert('tbl_newsletter_subscription',$data);
    }
    
    public function select_all_comment($blog_id)
    {
        $sql = "SELECT * FROM tbl_comment AS c, tbl_user AS u, tbl_blog AS b WHERE c.user_id=u.user_id AND c.blog_id=b.blog_id AND c.blog_id='$blog_id' AND c.comment_status=1 ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_comment_number($blog_id)
    {
        $sql = "SELECT COUNT(blog_id) AS comment_number FROM tbl_comment WHERE blog_id='$blog_id' AND comment_status=1 ";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
    
    public function select_blog_by_id($blog_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('blog_id',$blog_id);
        $this->db->join('tbl_admin', 'tbl_admin.admin_id = tbl_blog.admin_id', 'left');
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function save_comment_info()
    {
        $data = array();
        $data['blog_id'] = $this->input->post('blog_id', true);
        $data['user_id'] = $this->input->post('user_id', true);
        $data['comment_title'] = $this->input->post('comment_title', true);
        $data['comment'] = $this->input->post('comment', true);
        $this->db->insert('tbl_comment',$data);
    }
    
    public function save_reply_info()
    {
        $data=array();
        $data['reply'] = $this->input->post('reply', true);
        $comment_id=$this->input->post('comment_id',true);
        $this->db->where('comment_id',$comment_id);
        $this->db->update('tbl_comment',$data);
    }
    
    public function select_all_gallery()
    {
        $this->db->select('*');
        $this->db->from('tbl_gallery');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
}