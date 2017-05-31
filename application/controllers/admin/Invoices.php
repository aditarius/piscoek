
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoices extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('group') != '1'){
			$this->session->set_flashdata('error','Sorry, you are not logged in!');
			redirect('login');
		}
		
		//load model -> model_products
		$this->load->model('model_orders');
	}
	
	public function index()
	{
		$data['invoices'] = $this->model_orders->all();
		$this->load->view('backend/view_all_invoices', $data);
	}

    public function detail($invoice_id)
    {
        $data['invoice'] = $this->model_orders->get_invoice_by_id($invoice_id);
        $data['orders']  = $this->model_orders->get_orders_by_invoice($invoice_id);
		$this->load->view('backend/view_invoice_detail', $data);
    }
    public function done($invoice_id)
    {

        $this->db->set('status', 'paid'); //value that used to update column  
        $this->db->where('id', $invoice_id); //which row want to upgrade  
        $this->db->update('invoices');
        redirect('admin/invoices');
    }
    public function user($invoice_user)
    { 
    	 $data['users']  =$this->model_orders->get_users_by_id($invoice_user);
    	 $this->load->view('backend/view_users_detail', $data);
    	 
    	
 
    }
}
