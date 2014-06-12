<?php
class Special extends CI_Controller{

function __construct()
{
parent::__construct();
$this->is_logged_in();
}

function member(){

$data['$flag']=array();



$this->load->model('membership_model');
$data['a']=$this->membership_model->available();
$data['b']=$this->membership_model->getall();

$data['c']=count($data['b']);


$this->load-> view('member_area', $data);





}

function is_logged_in(){
$is_logged_in = $this->session->userdata('is_logged_in');

if(!isset($is_logged_in) || $is_logged_in != true)
{

echo "You don't have Permission to Visit this Page . <a href='../login'>Login<\a>";
die();
}


}

function book(){
$m = $this->input->post('id');
$this->load->model('membership_model');
$this->membership_model->updateroom($m);

 





}
function logout()

{

   $this->session->unset_userdata('is_logged_in');

   session_destroy();

   redirect('login', 'refresh');

 }
 function cancel(){
 $n = $this->input->post('id');
 $this->load->model('membership_model');
$this->membership_model->cancelroom($n);
 
 
 
 }
function viewp(){
$this->load->model('membership_model');
$data['b']=$this->membership_model->get();
 
$this->load-> view('profile',$data);
}
function editp(){
$this->load->model('membership_model');
$data['b']=$this->membership_model->get();
 
$this->load-> view('edit',$data);
}
function edit(){
$this->load->model('membership_model');
$this->membership_model->profilechange();


}
function logo(){

$this->load-> view('uploadphoto');

}
function save(){
$name = $this->input->post('name');
$ext = $this->input->post('ext');
if (isset($_FILES['image']['name']))
{
    $saveto = "../upload/$name.$ext";
    move_uploaded_file($_FILES['image']['tmp_name'], $saveto);
    $typeok = TRUE;
    switch($_FILES['image']['type'])
    {
        case "image/gif": $src = imagecreatefromgif($saveto); break;
        case "image/jpeg": // Both regular and progressive jpegs
        case "image/pjpeg": $src = imagecreatefromjpeg($saveto); break;
        case "image/png": $src = imagecreatefrompng($saveto); break;
        default: $typeok = FALSE; break;
    }
	}
redirect('http://localhost/ci/index.php/special/member','refresh'); 

    
}
function allmembers(){
$this->load->model('membership_model');
$this->membership_model->getall();


}
function message(){
$data['f']=$this->input->post('name');
$this->load->view('message', $data);

}
function sendmessage(){
$data['g']=$this->input->post('message');
$this->load->model('membership_model');
$this->membership_model->message();
}
function inbox(){

$this->load->model('membership_model');
$data['g']=$this->membership_model->inbox();
$data['c']=count($data['g']);
$this->load->view('inbox', $data);
}
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
        $config['smtp_user']    = 'emailtest2112';
        $config['smtp_pass']    = 'email2112';
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

