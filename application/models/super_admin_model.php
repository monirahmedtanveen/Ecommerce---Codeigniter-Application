<?php

class Super_Admin_Model extends CI_Model {
    //put your code here
    public function save_category_info($data) {
        $this->db->insert('tbl_category',$data);
    }
    
    public function select_all_category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function published_category_by_id($category_id) {
        $this->db->set('publication_status',1);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');
    }
    
    public function unpublished_category_by_id($category_id) {
        $this->db->set('publication_status',0);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');
    }
    
    public function delete_category_by_id($category_id) {
        $this->db->where('category_id',$category_id);
        $this->db->delete('tbl_category');
    }
    
    public function select_category_by_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id',$category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    public function update_category_by_id($data,$category_id) {
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category',$data);
    }
    
    public function save_manufacturer_info($data) {
        $this->db->insert('tbl_manufacturer',$data);
    }
    
    public function select_all_manufacturer() {
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function published_manufacturer_by_id($manufacturer_id) {
        $this->db->set('publication_status',1);
        $this->db->where('manufacturer_id',$manufacturer_id);
        $this->db->update('tbl_manufacturer');
    }
    
    public function unpublished_manufacturer_by_id($manufacturer_id) {
        $this->db->set('publication_status',0);
        $this->db->where('manufacturer_id',$manufacturer_id);
        $this->db->update('tbl_manufacturer');
    }
    
    public function delete_manufacturer_by_id($manufacturer_id) {
        $this->db->where('manufacturer_id',$manufacturer_id);
        $this->db->delete('tbl_manufacturer');
    }
    
    public function select_manufacturer_by_id($manufacturer_id) {
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $this->db->where('manufacturer_id',$manufacturer_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    public function update_manufacturer_by_id($data,$manufacturer_id) {
        $this->db->where('manufacturer_id',$manufacturer_id);
        $this->db->update('tbl_manufacturer',$data);
    }
    
    public function save_product_info($data) {
        $this->db->insert('tbl_product',$data);
    }
    
    public function select_all_published_category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_published_manufacturer() {
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_product() {
        $sql = 'SELECT a.*,b.category_name,c.manufacturer_name FROM tbl_product as a,tbl_category as b,'
                . ' tbl_manufacturer as c WHERE a.category_id = b.category_id and a.manufacturer_id = c.manufacturer_id';
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
//        $this->db->select('*');
//        $this->db->from('tbl_product');
//        $query_result = $this->db->get();
//        $result = $query_result->result();
        return $result;
    }
    
    public function published_product_by_id($product_id) {
        $this->db->set('publication_status',1);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product');
    }
    
    public function unpublished_product_by_id($product_id) {
        $this->db->set('publication_status',0);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product');
    }
    
    public function delete_product_by_id($product_id) {
        $this->db->where('product_id',$product_id);
        $this->db->delete('tbl_product');
    }
    
    public function select_product_by_id($product_id) {
        $sql = "SELECT a.*,b.category_name,c.manufacturer_name FROM tbl_product as a,tbl_category as b,"
                . " tbl_manufacturer as c WHERE a.category_id = b.category_id and a.manufacturer_id = c.manufacturer_id "
                . "and a.product_id = $product_id ";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
//        echo $result->product_name . '++++++++++++++++' . $result->category_name;
//        exit();
        
//        $this->db->select('*');
//        $this->db->from('tbl_product');
//        $this->db->where('product_id',$product_id);
//        $query_result = $this->db->get();
//        $result = $query_result->row();
        return $result;
    }
    
    public function update_product_by_id($data,$product_id) {
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product',$data);
    }
    
    public function select_all_featured_product() {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_status',1);
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function delete_order_by_id($order_id) {
        $this->db->where('order_id',$order_id);
        $this->db->delete('tbl_order');
    }
    
    public function select_order_by_id($order_id) {
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->where('order_id',$order_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    public function select_order_details_by_order_id($order_id) {
        $this->db->select('*');
        $this->db->from('tbl_order_details');
        $this->db->where('order_id',$order_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_customer_info_by_order_id($order_id) {
        $sql = "SELECT * FROM tbl_customer as a,tbl_order as b"
                . " WHERE a.customer_id = b.customer_id"
                . " AND b.order_id = '$order_id' ";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
    
    public function select_shipping_info_by_order_id($order_id) {
        $sql = "SELECT * FROM tbl_shipping as a,tbl_order as c "
                . "WHERE a.shipping_id = c.shipping_id and c.order_id = '$order_id' ";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
}
