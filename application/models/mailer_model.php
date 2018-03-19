<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mailer_model
 *
 * @author A
 */
class Mailer_Model extends CI_Model {
    //put your code here
    public function send_email($data,$templateName) {
        $this->load->library('email');
        $this->email->set_mailtype('html');
        $this->email->from($data['from_address'],$data['admin_full_name']);
        $this->email->to($data['to_address']);
        $this->email->subject($data['subject']);
        $body = $this->load->view('mailer_script/'.$templateName,$data,true);
        echo $body;
        exit();
        $this->email->message($body);
//        $this->email->send();
        $this->email->clear();
    }
    
    public function update_new_password() {
        $new_password = md5($this->input->post('new_password'));
        $email_address = $this->input->post('email_address');
        $this->db->set('password',$new_password);
        $this->db->where('email_address',$email_address);
        $this->db->update('tbl_customer');
    }
}
