<?php
class Login extends CI_Controller{

function index(){

$this->load->view('login_form');

}
function validate(){

$this->load->model('membership_model');
$a=$this->membership_model->valid();

if($a)
{
$data = array(
'username' => $this->input->post('username'),
"is_logged_in" => true);

$this->session->set_userdata($data);
redirect('special/member');

}
else{
echo "<h1> Wrong Credentials! </h1>";
$this->index();
}
}
function reg(){
$this->load->view('reg');

}

function update(){
$this->load->library('form_validation');
$this->form_validation->set_rules('firstname', 'NAME', 'trim|required');
$this->form_validation->set_rules('lastname', 'Last name', 'trim|required');
$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
$this->form_validation->set_rules('username1', 'Username', 'trim|required|min_length[4]');
$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[4]|max_length[32]');
$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password1]');
if($this->form_validation->run() == FALSE)
{
 $this->load->view('reg');
}
else{
$this->load->model('membership_model');
if($a=$this->membership_model->update())
{
$this->load->view('success');
 }
 else{
 $this->load->view('reg');
 }


}







}



}

