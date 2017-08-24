<?php
class Complaint extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Complaint_model');		
	}

	public function insert(){
		$tempat = $this->input->post('tempat');
		$kepada = $this->input->post('kepada');
		$permasalahan = $this->input->post('permasalahan');
		$nama = $this->input->post('nama');
		$divisi = $this->input->post('divisi');
		$handphone = $this->input->post('handphone');
		$data = array(
			'tempat'=>$tempat,
			'kepada'=>$kepada,
			'permasalahan'=>$permasalahan,
			'nama'=>$nama,
			'divisi'=>$divisi,
			'handphone'=>$handphone,
			'masuk'=>date('Y-m-d H:i:s')
			);
		$result = $this->Complaint_model->insert($data);
		if ($result){
			$alert = '<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			Keluhan telah berhasil ditambah, semoga keluhanmu cepat terjawab! :).
			</div>';
			$this->session->set_flashdata('alert', $alert);
			redirect('');
		}
	}
}
