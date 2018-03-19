<?php

class Checkout extends CI_Controller {

    //put your code here
    public function customer_registration() {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('pages/checkout', $data, true);
        $data['title'] = 'Customer Registration';
        $data['wish_count'] = $this->wish_list_model->wish_count_by_customer_id();
        $this->load->view('master', $data);
    }

    public function save_customer() {
        $this->checkout_model->save_customer_info();
        redirect('checkout/shipping_information');
    }

    public function shipping_information() {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('pages/shipping_information', $data, true);
        $data['title'] = 'Shipping Address';
        $data['wish_count'] = $this->wish_list_model->wish_count_by_customer_id();
        $this->load->view('master', $data);
    }

    public function ajax_email_check($email_address = NULL) {
        if ($email_address == NULL) {
            echo 'Email Required!.';
        } else {
            $result = $this->checkout_model->check_email_address($email_address);
            if ($result) {
                echo 'Already Exits !.';
            } else {
                echo 'Available.';
            }
        }
    }

    public function forgot_password() {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('pages/forgot_password', $data, true);
        $data['title'] = 'Forgot Password';
        $this->load->view('master', $data);
    }

    public function customer_email_check() {
        $sdata = array();
        $email_address = $this->input->post('email_address');
        $result = $this->checkout_model->check_email_address($email_address);
        if ($result) {
            $data = array();
            $data['from_address'] = 'admin@Ecomerce_CI_Batch_14.com';
            $data['admin_full_name'] = 'Ecomerce Batch14';
            $data['to_address'] = $email_address;
            $data['subject'] = 'Password Reset Email';
            $data['customer_name'] = $result->customer_name;
            $this->mailer_model->send_email($data, 'password_recovery_email');
            redirect('checkout/send_email_successfully');
        } else {
            $sdata['ex_message'] = 'You are not a Registered Customer !';
            $this->session->set_userdata($sdata);
            redirect('checkout/forgot_password');
        }
    }

    public function send_email_successfully() {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('pages/send_email_successfully', $data, true);
        $data['title'] = 'Forgot Password';
        $this->load->view('master', $data);
    }

    public function save_shipping() {
        $shipping_id = $this->checkout_model->save_shipping_info();
        redirect('checkout/payment_order');
    }

    public function payment_order() {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('pages/payment_order_form', $data, true);
        $data['title'] = 'Payment Order';
        $data['wish_count'] = $this->wish_list_model->wish_count_by_customer_id();
        $this->load->view('master', $data);
    }

    public function place_order() {
        $payment_type = $this->input->post('payment_type');
        $this->checkout_model->save_payment_info();
        if ($payment_type == 'cash_on_delivery') {
            $this->checkout_model->save_order_info();
            /*
             * Start Emailing
             */
            $order_id = $this->session->userdata('order_id');
            $this->session->unset_userdata('order_id');
            $mdata = array();
            $mdata['customer_info'] = $this->super_admin_model->select_customer_info_by_order_id($order_id);
            $mdata['shipping_info'] = $this->super_admin_model->select_shipping_info_by_order_id($order_id);
            $mdata['all_order_info'] = $this->super_admin_model->select_order_by_id($order_id);
            $mdata['order_details_info'] = $this->super_admin_model->select_order_details_by_order_id($order_id);
            $mdata['from_address'] = 'admin@Ecomerce_CI_Batch_14.com';
            $mdata['admin_full_name'] = 'Ecomerce_CI_Batch_14';
            $mdata['to_address'] = $mdata['customer_info']->email_address;
            $mdata['subject'] = 'Ecomerce_CI_Batch_14 - Successfull Order';
            $mdata['customer_name'] = $mdata['customer_info']->customer_name;
            $this->mailer_model->send_email($mdata, 'order_complete_email');

            /*
             * End Emailing
             */
            redirect('checkout/order_successfull');
        } else if ($payment_type == 'paypal') {
            
        }
    }

    public function order_successfull() {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('pages/order_successfull', $data, true);
        $data['title'] = 'order_successfull';
        $data['wish_count'] = $this->wish_list_model->wish_count_by_customer_id();
        $this->load->view('master', $data);
    }

    public function login() {
        $sdata = array();
        $result = $this->checkout_model->check_customer_login_info();
        if ($result) {
            redirect('welcome');
        } else {
            redirect('checkout/customer_registration');
        }
    }

    public function logout() {
        $this->session->unset_userdata('customer_id');
        $this->session->unset_userdata('customer_name');
        $this->session->unset_userdata('shipping_id');
        redirect('welcome');
    }

}
