 <?php
 class Admin extends CI_Controller {
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Complaint_model');

 	}
 	public function index(){
 		$this->form_validation->set_rules('username', 'Username', 'required');
 		$this->form_validation->set_rules('userpass', 'Password', 'required');
 		if($this->form_validation->run() == FALSE){
 			$this->load->view('loginview');
 		}else{
 			$username = $this->input->post('username');
 			$password = $this->input->post('userpass');
 			if ($username=="admin" AND $password=="superadmin"){
 				$this->load->view('superadmin');
 			}
 			else if ($username == "admin" AND $password == "keluhanonline2017it"){
 				$session_data = array(
 					'id_user' => 1,
 					'status' => "logined"
 					);
 				$this->session->set_userdata($session_data);
 				redirect('Admin/homeadmin');
 			}else if ($username == "admin" AND $password == "keluhanonline2017ga"){
 				$session_data = array(
 					'id_user' => 2,
 					'status' => "logined"
 					);
 				$this->session->set_userdata($session_data);
 				redirect('Admin/homeadmin');
 			}else if ($username == "admin" AND $password == "keluhanonline2017pmu"){
 				$session_data = array(
 					'id_user' => 3,
 					'status' => "logined"
 					);
 				$this->session->set_userdata($session_data);
 				redirect('Admin/homeadmin');
 			}else if ($username == "admin" AND $password == "keluhanonline2017pro"){
 				$session_data = array(
 					'id_user' => 4,
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
 		}
 	}

 	public function logout(){
 		$this->session->sess_destroy();
 		redirect('');
 	}

 	public function homeadmin(){
 		if (isset($_SESSION['id_user'])){
 			$id_admin = $_SESSION['id_user'];
 			$data['masuk'] = $this->Complaint_model->get_all_belum($id_admin);
 			$data['tanggapi'] = $this->Complaint_model->get_all_tanggapi($id_admin);
 			$data['selesai'] = $this->Complaint_model->get_all_selesai($id_admin);
 			$this->load->view('templates/header.php');
 			$this->load->view('homeadmin.php',$data);
 		}else{
 			redirect('Admin');
 		}
 	}	

 	public function ganti_tanggapi(){
 		$counter = $this->input->post('counter');
 		for ($i=1;$i<=$counter;$i++){
 			$char = "id[".$i."]";
 			$char2 = "data[".$i."]";
 			$char3 = "data2[".$i."]";
 			$char4 = "keterangan[".$i."]";
 			$id = $this->input->post($char);
 			$terima = $this->input->post($char2);
 			$tolak = $this->input->post($char3);
 			$keterangan=$this->input->post($char4);
 			if($terima==1){
 				$data = array(
 					'tanggapi'=>date('Y-m-d H:i:s'),
 					'keterangan'=>$keterangan
 					);
 				$this->Complaint_model->update($id,$data);
 			}
 			if ($tolak==2){
 				$data = array(
 					'tanggapi'=>date('Y-m-d H:i:s'),
 					'selesai'=>date('Y-m-d H:i:s'),
 					'tolak'=>1,
 					'keterangan'=>$keterangan
 					);
 				$this->Complaint_model->update($id,$data);
 			}
 		}
 		redirect('Admin/homeadmin');
 	}

 	public function ganti_selesai(){
 		$counter = $this->input->post('counter');
 		for ($i=1;$i<=$counter;$i++){
 			$char = "data[".$i."]";
 			$char2 = "id[".$i."]";
 			$value = $this->input->post($char);
 			$id = $this->input->post($char2);
 			if($value==2){
 				$data = array(
 					'selesai'=>date('Y-m-d H:i:s')
 					);
 				$this->Complaint_model->update($id,$data);
 			}
 		}
 		redirect('Admin/homeadmin');
 	}

 }