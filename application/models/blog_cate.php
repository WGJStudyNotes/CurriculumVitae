<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_cate extends CI_Model {
    public function get_all(){
        return $this->db->get('t_category')->result();
    }
}