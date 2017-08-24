<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Complaint_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function insert($data){
		$this->db->insert('complaint',$data);
		return ($this->db->affected_rows() != 1 ) ? false : true;
	}

	public function get_all(){
		$this->db->order_by('masuk', 'asc');
		return $this->db->get('complaint')->result_array();
	}

	public function get_all_belum(){
		$this->db->where('tanggapi',NULL);
		$this->db->order_by('masuk', 'asc');
		return $this->db->get('complaint')->result_array();	
	}

	public function get_all_tanggapi(){
		$this->db->where('tanggapi IS NOT NULL',null,false)->where('selesai',NULL);
		$this->db->order_by('masuk', 'asc');
		return $this->db->get('complaint')->result_array();
	}

	public function get_all_selesai(){
		$this->db->where('selesai IS NOT NULL',null,false);
		$this->db->order_by('masuk', 'asc');
		return $this->db->get('complaint')->result_array();		
	}
}
