<?php

class Cart extends CI_Controller {

    //put your code here
    public function add_to_cart() {
        $qty = $this->input->post('qty', true);
        $product_id = $this->input->post('product_id', true);
        $product_info = $this->cart_model->select_product_by_id($product_id);
        $data = array(
            'id' => $product_info->product_id,
            'qty' => $qty,
            'price' => $product_info->product_price,
            'name' => $product_info->product_name,
            'image' => $product_info->product_image
        );
        $this->cart->insert($data);
        redirect('cart/show_cart');
    }
    
    public function add_product_to_cart($product_id) {
        $qty = 1;
        $product_info = $this->super_admin_model->select_product_by_id($product_id);
        $data = array(
            'id' => $product_id,
            'qty' => $qty,
            'price' => $product_info->product_price,
            'name' => $product_info->product_name,
            'image' =>$product_info->product_image
        );
        $this->cart->insert($data);
        redirect('cart/show_cart');
    }

    public function show_cart() {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('pages/shopping_cart', $data, true);
        $data['title'] = 'Shopping Cart';
        $data['wish_count'] = $this->wish_list_model->wish_count_by_customer_id();
        $this->load->view('master', $data);
    }

    public function update_cart() {
        $qty = $this->input->post('qty', true);
        $rowid = $this->input->post('rowid', true);
        $data = array(
            'rowid' => $rowid,
            'qty' => $qty
        );
        $this->cart->update($data);
        redirect('cart/show_cart');
    }
    
    public function remove_cart($rowid) {
        $this->cart->remove($rowid);
        redirect('cart/show_cart');
    }

}
