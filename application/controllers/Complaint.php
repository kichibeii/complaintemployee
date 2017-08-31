<?php
class Complaint extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// load libraries
		$this->load->library('email');
		$this->load->model('Complaint_model');	

		// email configuration adn initiation
		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.googlemail.com';
		$config['smtp_port']    = 465;
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'your_email@gmail.com';
		$config['smtp_pass']    = 'keluhan';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
    	$config['mailtype'] = 'html'; // or html
    	$config['validation'] = TRUE; // bool whether to validate email or not     
    	$this->email->initialize($config);	
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
    		'masuk'=>date('Y-m-d H:i:s')
    		);
    	if ($kepada == 1){
    		$isi['tujuan']= 'komplain1@gmail.com';
    	}else if($kepada == 2){
    		$isi['tujuan']= 'komplain2@gmail.com';
    	}else if($kepada == 3){
    		$isi['tujuan']= 'komplain3@gmail.com';
    	}else if($kepada == 4){
    		$isi['tujuan']= 'komplain4@gmail.com';
    	}
    	$isi['subject'] = 'Permasalahan di '. $tempat;
    	$isi['tempat'] = $tempat;
    	$isi['keluhan'] = $permasalahan;
    	$hasil = $this->send_email($isi);
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

 	public function send_email($data){
		//dekralasi data
 		$tujuan = $data['tujuan'];
 		$subject = $data['subject'];
 		$tempat = $data['tempat'];
 		$keluhan = $data['keluhan'];

		// email functions
    	$this->email->from('keluhan.jiep@gmail.com');
    	$this->email->to($tujuan);
    	$this->email->subject($subject);
    	$text  = 'Ada keluhan di '.$tempat.'. Permasalahannya mengenai '.$keluhan.'. Harap segera di tanggapi :)';
    	$this->email->message($text);

    	//send email
    	$this->email->send();
    	echo $this->email->print_debugger();
    }
}
