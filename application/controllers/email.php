<?php

class Email extends CI_Controller {
    //put your code here
    public function recovery_password($enc_email=NULL) {
        
//        echo $enc_email . '<br/>';
        $enc_email = str_replace('%F2','/', $enc_email);
        $email_address = $this->encrypt->decode($enc_email);
//        echo $email_address;
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['email_address'] = $email_address;
        $data['main_content'] = $this->load->view('pages/password_recovery_page', $data, true);
        $data['title'] = 'Password Recovery Form';
        $this->load->view('master', $data);
    }
    
    public function update_password() {
        $this->mailer_model->update_new_password();
        $sdata = array();
//        $sdata['message'] = 'Your New Password Updated Successfully !';
//        $this->session->set_userdata($sdata);
        redirect('email/update_password_successfully');
    }
    
    public function update_password_successfully() {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();

        $data['main_content'] = $this->load->view('pages/update_password_successfully', $data, true);
        $data['title'] = 'Update Password Successfully';
        $this->load->view('master', $data);
    }
}
