<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_barang extends CI_Model
{
	public function get_barang(){
		$this->db->order_by("kode_barang","desc"); 
		return $this->db->get('barang')->result();
	}
	public function get_detail_barang($kode_barang){
		return $this->db->get_where('barang', array('kode_barang' => $kode_barang));
	}

	public function update_barang($data,$kode_barang){
		$this->db->update("barang",$data,$kode_barang);;
	}
	public function delete_barang($kode_barang){
		$this->db->where('kode_barang', $kode_barang);
		$this->db->delete('barang'); 
	}

	public function insert_barang($data){
		$this->db->insert('barang', $data); 
	}

	
}