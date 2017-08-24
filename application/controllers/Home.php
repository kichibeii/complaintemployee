<?php
class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
	}
	public function index(){
		$this->load->view('templates/header.php');
		$this->load->view('homeview.php');
		$this->load->view('templates/footer.php');
	}

	public function allcomplaint(){
		$this->load->view('templates/header.php');
		$this->load->view('allcomplaintview.php');
		$this->load->view('templates/footer.php');
	}

	
}
