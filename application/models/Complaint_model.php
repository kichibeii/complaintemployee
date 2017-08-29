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
		$this->db->order_by('masuk', 'dsc');
		return $this->db->get('complaint')->result_array();
	}

	public function get_all_belum($id){
		$this->db->where('tanggapi',NULL)->where('kepada',$id);
		$this->db->order_by('masuk', 'dsc');
		return $this->db->get('complaint')->result_array();	
	}

	public function get_all_tanggapi($id){
		$this->db->where('tanggapi IS NOT NULL',null,false)->where('selesai',NULL)->where('kepada',$id);
		$this->db->order_by('masuk', 'dsc');
		return $this->db->get('complaint')->result_array();
	}

	public function get_all_selesai($id){
		$this->db->where('selesai IS NOT NULL',null,false)->where('kepada',$id);
		$this->db->order_by('masuk', 'asc');
		return $this->db->get('complaint')->result_array();		
	}

	function update($id_complaint,$data) {
        $this->db->set($data);
        $this->db->where('id_complaint',$id_complaint);
        $this->db->update('complaint');
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
}
