<?php

class Admin extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $admin_name = $this->session->userdata('admin_name');
        if($admin_name!=null){
            redirect('super_admin','refresh');
        }
    }
    
    public function index() {
        $this->load->view('admin/admin_login');
    }
    
    public function admin_login_check() {
        $sdata = array();
        $admin_email_address = $this->input->post('admin_email_address',true);
        $admin_password = $this->input->post('admin_password',true);
        $this->load->model('admin_model');
        $result = $this->admin_model->check_admin_login_info($admin_email_address,$admin_password);
        if($result){
            $sdata['admin_name'] = $result->admin_name;
            $sdata['admin_email_address'] = $result->admin_email_address;
            $this->session->set_userdata($sdata);
            redirect('super_admin');
        }else{
            $sdata['exception'] = 'Your Email Address Or Password Invalid';
            $this->session->set_userdata($sdata);
            redirect('admin');
        }

//$this->load->view('admin/admin_master');
    }
}
