

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_orders extends CI_Model {
	
	public function process()
	{	
	

		//create new invoice
		$invoice = array(
			'date'		=> date('Y-m-d H:i:s'),
		    'user'      =>   $this->session->userdata('username'),
			'status'	=> 'unpaid'

		);
		$this->db->insert('invoices', $invoice);
		$invoice_id = $this->db->insert_id();
		
		// put ordered items in orders table
		foreach($this->cart->contents() as $item){
			$data = array(
				'invoice_id'		=> $invoice_id,
				'product_id'		=> $item['id'],
				'product_name'		=> $item['name'],
				'qty'				=> $item['qty'],
				'price'				=> $item['price']
			);
			$this->db->insert('orders', $data);
		}
		
		return TRUE;
	}
	
    public function all()
    {
        //Get all invoices from Invoices table
        $hasil = $this->db->get('invoices');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function get_invoice_by_id($invoice_id)
    {
        $hasil = $this->db->where('id',$invoice_id)->limit(1)->get('invoices');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }
    }

    public function get_orders_by_invoice($invoice_id)
    {
        $hasil = $this->db->where('invoice_id',$invoice_id)->get('orders');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }
	public function get_users_by_id($invoice_user)
    {
        $hasil = $this->db->where('username',$invoice_user)->limit(1)->get('users');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }
}
