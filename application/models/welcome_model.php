<?php

class Welcome_Model extends CI_Model {
    //put your code here
    public function select_latest_product() {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_status',0);
        $this->db->where('publication_status',1);
        $this->db->order_by('product_id','desc');
        $this->db->limit(8);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_product_by_category_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('category_id',$category_id);
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
}
