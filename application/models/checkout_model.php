<?php

class Checkout_Model extends CI_Model {
    //put your code here
    public function save_customer_info() {
        $data = array();
        $data['customer_name'] = $this->input->post('customer_name',true);
        $data['email_address'] = $this->input->post('email_address',true);
        $data['password'] = md5($this->input->post('password',true));
        $data['mobile_number'] = $this->input->post('mobile_number',true);
        $data['address'] = $this->input->post('address',true);
        $data['city'] = $this->input->post('city',true);
        $data['country'] = $this->input->post('country',true);
        $data['zip_code'] = $this->input->post('zip_code',true);
        $this->db->insert('tbl_customer',$data);
        $customer_id = $this->db->insert_id();
        $sdata = array();
        $sdata['customer_id'] = $customer_id;
        $sdata['customer_name'] = $data['customer_name'];
        $this->session->set_userdata($sdata);
    }
    
    public function check_email_address($email_address) {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('email_address',$email_address);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    public function check_customer_login_info() {
        $sdata = array();
        $email_address = $this->input->post('email_address',true);
        $password = md5($this->input->post('password',true));
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('email_address',$email_address);
        $this->db->where('password',$password);
        $query_result = $this->db->get();
        $result = $query_result->row();
        if($result){
            $sdata['customer_id'] = $result->customer_id;
            $sdata['customer_name'] = $result->customer_name;
            $this->session->set_userdata($sdata);
            return TRUE;
        }
        $sdata['ex_message'] = 'Your Email Address or Password Invalid !';
        $this->session->set_userdata($sdata);
        return FALSE;
    }
    
    public function save_shipping_info() {
        $data = array();
        $data['customer_name'] = $this->input->post('customer_name',true);
        $data['email_address'] = $this->input->post('email_address',true);
        $data['mobile_number'] = $this->input->post('mobile_number',true);
        $data['address'] = $this->input->post('address',true);
        $data['city'] = $this->input->post('city',true);
        $data['country'] = $this->input->post('country',true);
        $data['zip_code'] = $this->input->post('zip_code',true);
        $this->db->insert('tbl_shipping',$data);
        $shipping_id = $this->db->insert_id();
        $sdata = array();
        $sdata['shipping_id'] = $shipping_id;
        $this->session->set_userdata($sdata);
    }
    
    public function save_payment_info() {
        $data = array();
        $data['payment_type'] = $this->input->post('payment_type',true);
        $this->db->insert('tbl_payment',$data);
        $payment_id = $this->db->insert_id();
        $sdata = array();
        $sdata['payment_id'] = $payment_id;
        $this->session->set_userdata($sdata);
    }
    
    public function save_order_info() {
        $odata = array();
        $odata['customer_id'] = $this->session->userdata('customer_id');
        $odata['shipping_id'] = $this->session->userdata('shipping_id');
        $odata['payment_id'] = $this->session->userdata('payment_id');
        $odata['order_total'] = $this->session->userdata('g_total');
        $odata['order_comments'] = $this->input->post('order_comments');
        $this->db->insert('tbl_order',$odata);
        $order_id = $this->db->insert_id();
        $sdata = array();
        $sdata['order_id'] = $order_id;
        $this->session->set_userdata($sdata);
        $contents = $this->cart->contents();
        $oddata = array();
        foreach($contents as $v_contents){
            $oddata['order_id'] = $order_id;
            $oddata['product_id'] = $v_contents['id'];
            $oddata['product_name'] = $v_contents['name'];
            $oddata['product_price'] = $v_contents['price'];
            $oddata['product_sales_quantity'] = $v_contents['qty'];
            $this->db->insert('tbl_order_details',$oddata);
        }
        
        $sql = "UPDATE tbl_product,tbl_order_details SET "
                . "tbl_product.product_stock = tbl_product.product_stock-tbl_order_details.product_sales_quantity"
                . " WHERE tbl_product.product_id = tbl_order_details.product_id"
                . " AND tbl_order_details.order_id = '$order_id' ";
        $this->db->query($sql);
        
        $this->cart->destroy();
    }
    
    public function select_all_order() {
        $this->db->select('*');
        $this->db->from('tbl_order');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
}
