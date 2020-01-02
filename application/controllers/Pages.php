<?php
class Pages extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function index($page = 'home'){
		
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}

		$data['title'] = ucfirst($page);
		 // print_r($data);exit();

		$this->load->view('template/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('template/header');


	}
}







?>