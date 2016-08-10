<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {
    public function get_all(){
        return $this->db->get('t_blog')->result();
    }
    public function get_by_cateid($CateId){
        return $this->db->get_where('t_blog',array('cate_id'=>$CateId))->result();
    }
    public function by_blogID($blog_id){
        return $this->db->get_where('t_blog',array('blog_id'=>$blog_id))->result();
    }
    public function add_com($com_name,$com_content,$blog_id){
        $this->db->insert('t_blog_com',array(
            'com_name'=>$com_name,
            'com_content'=>$com_content,
            'blog_id'=>$blog_id
        ));
        return  $this->db->affected_rows();
    }
}