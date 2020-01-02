<?php
class Posts extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Mdl_posts');
	}

	public function index(){

		$data['title'] = "Latest Posts";

		$data['posts'] = $this->Mdl_posts->get_posts();
		 // print_r($data);exit();

		$this->load->view('template/header');
		$this->load->view('posts/index', $data);
		$this->load->view('template/header');
	}
	public function view($slug = NULL){
		$data['my_post'] = $this->Mdl_posts->get_posts($slug);
		 // print_r($data['posts']);exit();

		if (empty($data['my_post'])) {
			show_404();
		}

		$data['title'] = $data['my_post']['title'];

		$this->load->view('template/header');
		$this->load->view('posts/view', $data);
		$this->load->view('template/header');

	}
	// create view
	public function add(){

		$data['title'] = "Latest Posts";
		// print_r($data['title']);exit();
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('body','Body','required');

		if ($this->form_validation->run() === FALSE) {
		$this->load->view('template/header');
		$this->load->view('posts/create', $data);
		$this->load->view('template/header');
			
		}
		else{
		$this->Mdl_posts->create();
		// return redirect(base_url($this->uri->segment(1),'refresh'));
		redirect('posts');
	   }
	}

	// delete
	public function delete($id){
		$this->Mdl_posts->remove($id);
		// return redirect(base_url($this->uri->segment(1),'refresh'));
		redirect('posts');

	}
	public function edit($id){
		$data = $this->db->get_where('posts',array('ID'=>$id))->row();
		$this->load->view('template/header');
		$this->load->view('posts/update_post', $data);
		$this->load->view('template/header');
	}
	public function update(){
		$post = $this->input->post();
		$this->db->where('ID',$post['id']);
		$this->db->update('posts',$post);
		return redirect('posts');
		// return base_url($this->uri->segment(1),'refrsh');
	}

}
?>