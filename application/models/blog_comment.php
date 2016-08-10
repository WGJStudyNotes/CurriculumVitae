<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_comment extends CI_Model {
    public function by_comID($blog_id){
        $this->db->order_by('com_time','desc');
        return $this->db->get_where('t_blog_com',array('blog_id'=>$blog_id))->result();
    }
}