<?php 
class Membership_model extends CI_Model {

function valid()
{
 $this->db->where('username' , ($this->input->post('username')));
  $this->db->where('password' , md5($this->input->post('password')));
 $q= $this->db->get('membership');
 
 if($q->num_rows==1){
   return true;
 }
 
 }
 function update(){
 $new = array(
 'firstname' => $this->input->post('firstname'),
 'lastname' => $this->input->post('lastname'),
 'email' => $this->input->post('email'),
 'username' => $this->input->post('username1'),
 'password' => md5($this->input->post('password1'))
 );
 $nm=$this->input->post('username1');
 $insert= $this->db->insert('membership', $new);
 $this->db->query("CREATE TABLE $nm (
         id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
         Message TEXT,
         Sender TEXT
       )");
 return $insert;
 
 }
 
 function available(){
 return $this->db->get('rooms')->result();
 }
 function updateroom($m){
 $this->db->where('id', $m);
 $data = array(
   'status' => 'Booked' ,
   'bookedby'=> $this->session->userdata['username']
    );

$this->db->update('rooms', $data);

redirect('http://localhost/ci/index.php/special/member','refresh'); 
 
 }
 function cancelroom($n){
 $this->db->where('id', $n);
 $data = array(
   'status' => 'available' ,
   'bookedby'=> ''
    );

$this->db->update('rooms', $data);

redirect('http://localhost/ci/index.php/special/member','refresh'); 
 
 }
 function get(){
 $this->db->where('username', $this->session->userdata['username']);
 return $this->db->get('membership')->result(); 
 }
 function profilechange(){
 $this->db->where('username', $this->session->userdata['username']);
 $data = array(
   'firstname' => $this->input->post('firstname'),
 'lastname' => $this->input->post('lastname'),
 'email' => $this->input->post('email')
     );
	 

$this->db->update('membership', $data);
redirect('http://localhost/ci/index.php/special/viewp','refresh');
 
 
 
 }
 function getall(){
 $s=$this->db->query("SELECT username FROM membership");
$p=$s->result();

 return $p ;
 }
 function message(){
 $new = array(
 'Message' => $this->input->post('message'),
 'Sender' => $this->session->userdata['username']
  );
 
 $insert= $this->db->insert($this->input->post('table'), $new);
 redirect('http://localhost/ci/index.php/special/member','refresh');
 
 
 }
 function inbox(){
 $t=$this->session->userdata['username'];
 $s=$this->db->query("SELECT * FROM $t ");
 $k=$s->result();
 return $k ;
 
  
 
 
 }
 
 }
 