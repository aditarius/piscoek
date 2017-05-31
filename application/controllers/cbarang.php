<?php
class cbarang extends CI_Controller{
function __construct(){
	parent::__construct();
	$this->load->model('mbarang');
}
function index()
{
	$data['title']='ini contoh untuk menampilkan data';
	$data['barang']=$this->mbarang->selectAll();
	$this->load->view('vbarang',$data);
	}
}
function input()
{
	$this->load->helper('url');
      $this->load->view('inputbarang_view');
}
function tambah()
{
        $this->mbarang->input();     
        redirect ('cbarang');
}
?>