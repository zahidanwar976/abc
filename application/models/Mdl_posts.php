<?php

class Mdl_posts extends CI_Model{

	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}

	public function get_posts($slug = FALSE){

		if($slug === FALSE){
		 $query = $this->db->get('posts');
		 return $query->result();
		}
		 $query = $this->db->get_where('posts',array('slug' => $slug))->row_array();
		 return $query;
	}
	public function create(){
		$data = $this->input->post();
		$this->db->insert('posts',$data);
	}
	public function remove($id){
		$this->db->where('ID',$id);
		$this->db->delete('posts');
	}
}

?>