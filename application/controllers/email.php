<?php

class Email extends CI_Controller{
 function send(){
 $this->load->library('email');
 $this->load->view('emailh');
 }
 
 
 function response(){
 

$this->load->library('email');
$config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = $_POST['uname'];
        $config['smtp_pass']    = $_POST['pword'];
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not      

        $this->email->initialize($config);
$this->email->initialize($config);

$this->email->from($_POST['uname'], $_POST['name']);
$this->email->to($_POST['smail']); 
 

$this->email->subject($_POST['sub']);
$this->email->message($_POST['message']);	

$this->email->send();

$this->email->print_debugger();
 
 
$this->load->view('response');
}

 }