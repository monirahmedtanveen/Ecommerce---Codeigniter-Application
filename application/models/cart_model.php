<?php

class Cart_Model extends CI_Model {
    //put your code here
    public function select_product_by_id($product_id) {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id',$product_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
}
