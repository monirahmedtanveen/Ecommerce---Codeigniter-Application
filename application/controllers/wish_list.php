<?php

class Wish_List extends CI_Controller {

    //put your code here
    public function add_to_wish_list($product_id) {
        $result = $this->wish_list_model->select_product_by_id($product_id);
        if (!$result) {
            $this->wish_list_model->add_product_to_wish_list($product_id);
            redirect('wish_list/show_wish_list');
        }  else {
            $sdata = array();
            $sdata['exception'] = 'This product is already in your wish list !!';
            $this->session->set_userdata($sdata);
            redirect('wish_list/show_wish_list');
        }
    }

    public function show_wish_list() {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['all_wish_list'] = $this->wish_list_model->select_all_wish_list_by_customer_id();
        $data['main_content'] = $this->load->view('pages/wish_list', $data, true);
        $data['title'] = 'Wish List';
        $data['wish_count'] = $this->wish_list_model->wish_count_by_customer_id();
        $this->load->view('master', $data);
    }

    public function delete_wish_list($wish_list_id) {
        $this->wish_list_model->delete_wish_list_by_id($wish_list_id);
        redirect('wish_list/show_wish_list');
    }

}
