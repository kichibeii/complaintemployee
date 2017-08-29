<?php
class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Complaint_model');
	}
	public function index(){
		$this->load->view('templates/header.php');
		$this->load->view('homeview.php');
		$this->load->view('templates/footer.php');
	}

	public function allcomplaint(){
		$data['complaints'] = $this->Complaint_model->get_all();
		$this->load->view('templates/header.php');
		$this->load->view('allcomplaintview.php',$data);
		$this->load->view('templates/footer.php');
	}

	
}
