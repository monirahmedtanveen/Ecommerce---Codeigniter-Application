<?php

class Super_Admin extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $admin_name = $this->session->userdata('admin_name');
        if ($admin_name == null) {
            redirect('admin', 'refresh');
        }
    }

    public function index() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/pages/deshboard', '', true);
        $data['title'] = 'Deshboard';
        $this->load->view('admin/admin_master', $data);
    }

    public function logout() {
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_email_address');
        $sdata = array();
        $sdata['message'] = 'You are Successfully Logout!!';
        $this->session->set_userdata($sdata);
        redirect('admin');
    }

    public function add_category() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/pages/add_category', '', true);
        $data['title'] = 'Add Category';
        $this->load->view('admin/admin_master', $data);
    }

    public function save_category() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name');
        $data['category_description'] = $this->input->post('category_description');
        $data['publication_status'] = $this->input->post('publication_status');
        $this->super_admin_model->save_category_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Category Successfully!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_category');
    }

    public function manage_category() {
        $data = array();
        $data['all_category'] = $this->super_admin_model->select_all_category();
        $data['admin_main_content'] = $this->load->view('admin/pages/manage_category', $data, true);
        $data['title'] = 'Manage Category';
        $this->load->view('admin/admin_master', $data);
    }

    public function published_category($category_id) {
        $this->super_admin_model->published_category_by_id($category_id);
        redirect('super_admin/manage_category');
    }

    public function unpublished_category($category_id) {
        $this->super_admin_model->unpublished_category_by_id($category_id);
        redirect('super_admin/manage_category');
    }

    public function delete_category($category_id) {
        $this->super_admin_model->delete_category_by_id($category_id);
        redirect('super_admin/manage_category');
    }

    public function edit_category($category_id) {
        $data = array();
        $data['category_info'] = $this->super_admin_model->select_category_by_id($category_id);
        $data['admin_main_content'] = $this->load->view('admin/pages/edit_category', $data, true);
        $data['title'] = 'Edit Category';
        $this->load->view('admin/admin_master', $data);
    }

    public function update_category() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name');
        $data['category_description'] = $this->input->post('category_description');
        $data['publication_status'] = $this->input->post('publication_status');
        $category_id = $this->input->post('category_id');
        $this->super_admin_model->update_category_by_id($data, $category_id);
        redirect('super_admin/manage_category');
    }

    public function add_manufacturer() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/pages/add_manufacturer', '', true);
        $data['title'] = 'Add Manufacturer';
        $this->load->view('admin/admin_master', $data);
    }

    public function save_manufacturer() {
        $data = array();
        $data['manufacturer_name'] = $this->input->post('manufacturer_name');
        $data['manufacturer_description'] = $this->input->post('manufacturer_description');
        $data['publication_status'] = $this->input->post('publication_status');
        $this->super_admin_model->save_manufacturer_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Manufacturer Successfully!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_manufacturer');
    }

    public function manage_manufacturer() {
        $data = array();
        $data['all_manufacturer'] = $this->super_admin_model->select_all_manufacturer();
        $data['admin_main_content'] = $this->load->view('admin/pages/manage_manufacturer', $data, true);
        $data['title'] = 'Manage Manufacturer';
        $this->load->view('admin/admin_master', $data);
    }

    public function published_manufacturer($manufacturer_id) {
        $this->super_admin_model->published_manufacturer_by_id($manufacturer_id);
        redirect('super_admin/manage_manufacturer');
    }

    public function unpublished_manufacturer($manufacturer_id) {
        $this->super_admin_model->unpublished_manufacturer_by_id($manufacturer_id);
        redirect('super_admin/manage_manufacturer');
    }

    public function delete_manufacturer($manufacturer_id) {
        $this->super_admin_model->delete_manufacturer_by_id($manufacturer_id);
        redirect('super_admin/manage_manufacturer');
    }

    public function edit_manufacturer($manufacturer_id) {
        $data = array();
        $data['manufacturer_info'] = $this->super_admin_model->select_manufacturer_by_id($manufacturer_id);
        $data['admin_main_content'] = $this->load->view('admin/pages/edit_manufacturer', $data, true);
        $data['title'] = 'Edit Manufacturer';
        $this->load->view('admin/admin_master', $data);
    }

    public function update_manufacturer() {
        $data = array();
        $data['manufacturer_name'] = $this->input->post('manufacturer_name');
        $data['manufacturer_description'] = $this->input->post('manufacturer_description');
        $data['publication_status'] = $this->input->post('publication_status');
        $manufacturer_id = $this->input->post('manufacturer_id');
        $this->super_admin_model->update_manufacturer_by_id($data, $manufacturer_id);
        redirect('super_admin/manage_manufacturer');
    }

    public function add_product() {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['admin_main_content'] = $this->load->view('admin/pages/add_product', $data, true);
        $data['title'] = 'Add Product';
        $this->load->view('admin/admin_master', $data);
    }

    public function save_product() {
        $data = array();
        $fdata = array();
        $error = '';
        $sdata = array();
        $data['product_name'] = $this->input->post('product_name');
        $data['category_id'] = $this->input->post('category_id');
        $data['manufacturer_id'] = $this->input->post('manufacturer_id');
        $data['product_price'] = $this->input->post('product_price');
        $data['product_stock'] = $this->input->post('product_stock');
        /*
         * start upload image
         */

        $config['upload_path'] = './product_image/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 3000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('product_image')) {
            $error = $this->upload->display_errors();
            $sdata['exception'] = $error;
            $this->session->set_userdata($sdata);
        } else {
            $fdata = $this->upload->data();
            $data['product_image'] = $config['upload_path'] . $fdata['file_name'];
        }

        /*
         * end upload image
         */
        $data['product_short_description'] = $this->input->post('product_short_description');
        $data['product_long_description'] = $this->input->post('product_long_description');
        $data['publication_status'] = $this->input->post('publication_status');
        $data['product_status'] = $this->input->post('product_status');
        $this->super_admin_model->save_product_info($data);
        $sdata['message'] = 'Save Product Successfully!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_product');
    }

    public function manage_product() {
        $data = array();
        $data['all_product'] = $this->super_admin_model->select_all_product();
        $data['admin_main_content'] = $this->load->view('admin/pages/manage_product', $data, true);
        $data['title'] = 'Manage Product';
        $this->load->view('admin/admin_master', $data);
    }

    public function published_product($product_id) {
        $this->super_admin_model->published_product_by_id($product_id);
        redirect('super_admin/manage_product');
    }

    public function unpublished_product($product_id) {
        $this->super_admin_model->unpublished_product_by_id($product_id);
        redirect('super_admin/manage_product');
    }

    public function delete_product($product_id) {
        $this->super_admin_model->delete_product_by_id($product_id);
        redirect('super_admin/manage_product');
    }

    public function edit_product($product_id) {
        $data = array();
        $data['product_info'] = $this->super_admin_model->select_product_by_id($product_id);
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['admin_main_content'] = $this->load->view('admin/pages/edit_product', $data, true);
        $data['title'] = 'Edit Product';
        $this->load->view('admin/admin_master', $data);
    }

    public function update_product() {
        $data = array();
        $fdata = array();
        $sdata = array();
        $error = '';
        $data['product_name'] = $this->input->post('product_name');
        $data['category_id'] = $this->input->post('category_id');
        $data['manufacturer_id'] = $this->input->post('manufacturer_id');
        $data['product_price'] = $this->input->post('product_price');
        $data['product_stock'] = $this->input->post('product_stock');
        /*
         * Start Image Upload
         */

        $config['upload_path'] = './product_image/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 3000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('product_image')) {
            $error = $this->upload->display_errors();
            $sdata['exception'] = $error;
            $this->session->set_userdata($sdata);
        } else {
            $fdata = $this->upload->data();
            $data['product_image'] = $config['upload_path'] . $fdata['file_name'];
        }


        /*
         * End Image Upload
         */
        
        $data['product_short_description'] = $this->input->post('product_short_description');
        $data['product_long_description'] = $this->input->post('product_long_description');
        $data['publication_status'] = $this->input->post('publication_status');
        $data['product_status'] = $this->input->post('product_status');
        $product_id = $this->input->post('product_id');
        $this->super_admin_model->update_product_by_id($data,$product_id);
        redirect('super_admin/manage_product');
    }
    
    public function manage_order() {
        $data = array();
        $data['all_order'] = $this->checkout_model->select_all_order();
        $data['admin_main_content'] = $this->load->view('admin/pages/manage_order', $data, true);
        $data['title'] = 'Manage Order';
        $this->load->view('admin/admin_master', $data);
    }
    
    public function delete_order($order_id) {
        $this->super_admin_model->delete_order_by_id($order_id);
        redirect('super_admin/manage_order');
    }
    
    public function view_invoice($order_id) {
        $data = array();
        $data['customer_info'] = $this->super_admin_model->select_customer_info_by_order_id($order_id);
        $data['shipping_info'] = $this->super_admin_model->select_shipping_info_by_order_id($order_id);
        $data['all_order_info'] = $this->super_admin_model->select_order_by_id($order_id);
        $data['order_details_info'] = $this->super_admin_model->select_order_details_by_order_id($order_id);
        $data['admin_main_content'] = $this->load->view('admin/pages/view_invoice', $data, true);
        $data['title'] = 'View Invoice';
        $this->load->view('admin/admin_master', $data);
    }
    
    public function download_invoice($order_id) {
        $data = array();
        $data['customer_info'] = $this->super_admin_model->select_customer_info_by_order_id($order_id);
        $data['shipping_info'] = $this->super_admin_model->select_shipping_info_by_order_id($order_id);
        $data['all_order_info'] = $this->super_admin_model->select_order_by_id($order_id);
        $data['order_details_info'] = $this->super_admin_model->select_order_details_by_order_id($order_id);
        $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/pages/view_invoice',$data,true);
        $file_name = pdf_create($view_file,'inv-00'.$order_id);
        echo $file_name;
    }

}
