<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['all_featured_product'] = $this->super_admin_model->select_all_featured_product();
        $data['latest_product'] = $this->welcome_model->select_latest_product();
        $data['wish_count'] = $this->wish_list_model->wish_count_by_customer_id();
        $data['main_content'] = $this->load->view('pages/home_content_one', $data, true);
        $data['title'] = 'Home';
        $this->load->view('master', $data);
    }

    public function index2() {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['all_featured_product'] = $this->super_admin_model->select_all_featured_product();
        $data['latest_product'] = $this->welcome_model->select_latest_product();
        $data['main_content'] = $this->load->view('pages/home_content_one', $data, true);
        $data['title'] = 'Home';
        $data['slider'] = true;
        $data['wish_count'] = $this->wish_list_model->wish_count_by_customer_id();
        $this->load->view('master', $data);
    }

    public function about_us() {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('pages/about_us', $data, true);
        $data['title'] = 'About Us';
        $data['wish_count'] = $this->wish_list_model->wish_count_by_customer_id();
        $this->load->view('master', $data);
    }

    public function wish_list() {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('pages/wish_list', $data, true);
        $data['title'] = 'Wish List';
        $data['wish_count'] = $this->wish_list_model->wish_count_by_customer_id();
        $this->load->view('master', $data);
    }

    public function my_account() {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('pages/my_account', $data, true);
        $data['title'] = 'Account Login';
        $data['wish_count'] = $this->wish_list_model->wish_count_by_customer_id();
        $this->load->view('master', $data);
    }

    public function compare() {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('pages/compare', $data, true);
        $data['title'] = 'Product Comparison';
        $data['wish_count'] = $this->wish_list_model->wish_count_by_customer_id();
        $this->load->view('master', $data);
    }

    public function shopping_cart() {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('pages/shopping_cart', $data, true);
        $data['title'] = 'Shopping Cart';
        $data['wish_count'] = $this->wish_list_model->wish_count_by_customer_id();
        $this->load->view('master', $data);
    }

    public function category($category_id) {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['all_category_product'] = $this->welcome_model->select_all_product_by_category_id($category_id);
        $data['main_content'] = $this->load->view('pages/category', $data, true);
        $data['title'] = 'Category';
        $data['wish_count'] = $this->wish_list_model->wish_count_by_customer_id();
        $this->load->view('master', $data);
    }

    public function product_details($product_id) {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['product_info'] = $this->super_admin_model->select_product_by_id($product_id);
        $data['main_content'] = $this->load->view('pages/product_details', $data, true);
        $data['title'] = 'Product Details';
        $data['wish_count'] = $this->wish_list_model->wish_count_by_customer_id();
        $this->load->view('master', $data);
    }

    public function check_out() {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('pages/checkout', $data, true);
        $data['title'] = 'Checkout';
        $data['wish_count'] = $this->wish_list_model->wish_count_by_customer_id();
        $this->load->view('master', $data);
    }

    public function contact_us() {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('pages/contact_us', $data, true);
        $data['title'] = 'Contact Us';
        $data['wish_count'] = $this->wish_list_model->wish_count_by_customer_id();
        $this->load->view('master', $data);
    }

}
