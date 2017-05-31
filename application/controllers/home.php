<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('model_barang');
}
	public function index()
	{
		$data['barang'] = $this->model_barang->get_barang();
		$this->load->view('home',$data);
	}

	public function insert()
	{
		$this->load->view('insert');
	}

	public function proses_insert()
	{
		$data = array('kode_barang' => $this->input->post('kode_barang') ,
					'nama_barang' => $this->input->post('nama_barang') ,
					'satuan' => $this->input->post('satuan'),
					'jumlah' => $this->input->post('jumlah'),
					'harga' => $this->input->post('harga'),
					'kategori' => $this->input->post('kategori') 
					);
		$this->model_barang->insert_barang($data);	
		redirect('home','refresh');
	}

	public function update($kode_barang)
	{
		$data['barang'] = $this->model_barang->get_detail_barang($kode_barang)->row();
		$this->load->view('update',$data);
	}

	public function proses_update()
	{
		$kode_barang['kode_barang'] = $this->input->post('kode_barang');
		$data = array('nama_barang' => $this->input->post('nama_barang') ,
					'satuan' => $this->input->post('satuan'),
					'jumlah' => $this->input->post('jumlah'),
					'harga' => $this->input->post('harga'),
					'kategori' => $this->input->post('kategori') 
					);
		$this->model_barang->update_barang($data,$kode_barang);
		redirect('home','refresh');
	}

	public function delete($kode_barang)
	{
		$this->model_barang->delete_barang($kode_barang);
		redirect('home','refresh');
	}


}