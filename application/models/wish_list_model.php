<?php

class Wish_List_Model extends CI_Model {
    //put your code here
    public function add_product_to_wish_list($product_id) {
        $data = array();
        $data['product_id'] = $product_id;
        $data['customer_id'] = $this->session->userdata('customer_id');
        $this->db->insert('tbl_wish_list',$data);
    }
    
    public function select_all_wish_list_by_customer_id() {
        $customer_id = $this->session->userdata('customer_id');
        $this->db->select('*');
        $this->db->from('tbl_wish_list');
        $this->db->where('customer_id',$customer_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function wish_count_by_customer_id() {
        $customer_id = $this->session->userdata('customer_id');
        $this->db->select('*');
        $this->db->from('tbl_wish_list');
        $this->db->where('customer_id',$customer_id);
        $query_result = $this->db->get();
        $result = $query_result->num_rows();
        return $result;
    }
    
    public function delete_wish_list_by_id($wish_list_id) {
        $this->db->where('wish_list_id',$wish_list_id);
        $this->db->delete('tbl_wish_list');
    }
    
    public function select_product_by_id($product_id) {
        $customer_id = $this->session->userdata('customer_id');
        $this->db->select('*');
        $this->db->from('tbl_wish_list');
        $this->db->where('product_id',$product_id);
        $this->db->where('customer_id',$customer_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
}
