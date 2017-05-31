<?php
class mbarang extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("kode_barang","desc"); 
		return $this->db->get('barang')->result();
   }
	function input()
   {
	
		$kode_barang = $this->input->post('kode_barang');
	$nama_barang = $this->input->post('nama_barang');
	$satuan =$this->input->post('satuan');
	$jumlah =$this->input->post('jumlah');
	$harga =$this->input->post('harga');
	$kategori =$this->input->post('kategori');
	$data = array( 'kode_barang'=>$kode_barang, 'nama_barang'=>$nama_barang, 'satuan'=>$satuan, 'jumlah'=>$jumlah, 'harga'=>$harga, 'kategori'=>$kategori );
	$this->db->insert('barang',$data);	
	
		
   }
}
?>