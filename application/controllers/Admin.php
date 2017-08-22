<?php
class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
	}
	public function index(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('userpass', 'Password', 'required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('loginview');
		}else{
			$username = $this->input->post('username');
			$password = $this->input->post('userpass');
			if ($username == "admin"){
				if ($password == "keluhanonline2017"){
					$session_data = array(
						'id_user' => 1,
						'status' => "logined"
						);
					$this->session->set_userdata($session_data);
					redirect('Admin/homeadmin');
				}else{
					$alert = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
					</button>
					<span><strong>Warning !</strong> Username or password is incorrect.
					</div>';
					$this->session->set_flashdata('alert', $alert);
					redirect('Admin');
				}
			}else{
				$alert = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
				</button>
				<span><strong>Warning !</strong> Username or password is incorrect.
				</div>';
				$this->session->set_flashdata('alert', $alert);
				redirect('Admin');
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('');
	}

	public function homeadmin(){
		if (isset($_SESSION['id_user'])){
			$this->load->view('templates/header.php');
			$this->load->view('homeadmin.php');
			$this->load->view('templates/footer.php');
		}else{
			redirect('Admin');
		}
	}	
}

