<?php
class CentryBarang extends CI_Controller {
    function tambahdata(){
 
        if($this->input->post('submit')){
            $this->load->model('mentrybarang');
            $this->mentrybarang>tambah();
            redirect('centrybarang/index');
        }
        $this->load->view('vbarang');
    }
}
?>