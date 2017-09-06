<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mdata extends CI_Model {
	
	function get_data(){
		$this->db->select('*');
		$this->db->from('data');
		$query = $this->db->get();

		return $query->result();
	}

	function select_data($npp, $tanggal){
		$query = sprintf("SELECT * FROM data WHERE npp='$npp' AND tanggal='$tanggal'");		
		return $this->db->query($query)->result();
	}

	function get_jabatan(){
		$this->db->select('*');
		$this->db->from('jabatan');
		$query = $this->db->get();

		return $query->result();
	}

	// function get_jabatan(){
	// 	$query = sprintf("SELECT * FROM jabatan");		
	// 	return $this->db->query($query)->result();
	// }

	function delete_data($id){
		$this->db->where('id', $id);
		return $this->db->delete('data');
	}	

	function cek_database($npp, $tgl_tugas){
		$this->load->helper('url');
		$this->db->where('npp', $npp);
		$this->db->where('tanggal', $tgl_tugas);
		return $this->db->get('data');
	}

	function upload_database($data){
		$this->db->insert("data",$data);
	}
}
