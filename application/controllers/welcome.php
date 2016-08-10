<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function message(){
		$com_name=$this->input->post('name');
		$com_message=$this->input->post('message');
		$this->load->model('blog_com');
		$addCom=$this->blog_com->add_com($com_name,$com_message);
		if($addCom>0){
			echo "success";
		}else{
			echo "file";
		}
	}

	public function most(){
		$this->load->view('most');







}
	public function index()
	{
		$CateId=$this->input->get('cate_id');
		//		加载model
		$this->load->model('blog_cate');
		$this->load->model('blog_com');
		$this->load->model('blog_model');
//调用方法
		$blogCom=$this->blog_com->get_all();
		$blogCates=$this->blog_cate->get_all();
//		获取数据查询评论
		if($CateId==1||$CateId==""){
			$blogModel=$this->blog_model->get_all();
		}else{
			$blogModel=$this->blog_model->get_by_cateid($CateId);
		}
		$this->load->view('index',array(
				'cates'=>$blogCates,
				'blogs'=>$blogModel,
				'blogcoms'=>$blogCom
		));

	}
	public function detail(){
		$blog_id=$this->input->get('blog_id');
		$this->load->model('blog_model');
		$this->load->model('blog_comment');
		$blogs=$this->blog_model->by_blogID($blog_id);
		$coms=$this->blog_comment->by_comID($blog_id);
		$this->load->view('detail',array(
			'blogs'=>$blogs,
			'coms'=>$coms
		));
	}
	public function blogCom(){
		$this->load->model('blog_model');
		$blog_id=$this->input->get('blog_id');
		$com_name=$this->input->get('com_name');
		$com_content=$this->input->get('com_content');
		$row=$this->blog_model->add_com($com_name,$com_content,$blog_id);
		if($row>0){
			echo 'success';
		}
		else{
			echo 'fail';
		}

	}
	public function moreComment(){
//		$this->load->model('blog_more');
//		$blog_more=$this->load->blog_more->get_all();
		$this->load->view('moreblog');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */