<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_login();

		// load libraries
		$this->load->library('email');

		// email configuration adn initiation
		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.googlemail.com';
		$config['smtp_port']    = 465;
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'keluhan.jiep@gmail.com';
		$config['smtp_pass']    = 'keluhanonline2017';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
    	$config['mailtype'] = 'html'; // or html
    	$config['validation'] = TRUE; // bool whether to validate email or not     
    	$this->email->initialize($config);
    }

    public function send_email($email_pendaftar, $subject, $tempat, $keluhan){
		// email functions
    	$this->email->from('keluhan.jiep@gmail.com', 'Keluhan JIEP');
    	$this->email->to($email_pendaftar);
    	$this->email->subject($subject);
    	$text  = 'Ada keluhan di '.$tempat.'. Permasalahannya mengenai '.$permasalahan.'. Harap segera di tanggapi :)';
    	$this->email->message($text);

    	//send email
    	$this->email->send();
    }
}