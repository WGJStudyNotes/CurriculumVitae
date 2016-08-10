<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_com extends CI_Model {
    public function get_all(){
        $this->db->order_by('com_time','desc');
        return $this->db->get('t_comment')->result();
    }
    public function add_com($com_name,$com_message){

       $this->db->insert('t_comment',array('com_name'=>$com_name,'com_cont'=>$com_message));
        return $this->db->affected_rows();
    }
}