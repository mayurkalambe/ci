<?php

class Room extends CI_Controller{
 function home(){
 

 $this->load->view('room_home1');
 }
 
 function sign(){
 $uname=$this->input->post('uname');
 $pword=$this->input->post('pword');
 $this->load->model('room_model');
 $this->room_model->getall($uname,$pword);
 
 
 }
 
 
 function register(){
 
 $this->load->view('register');
 
 }
 function reg(){
 
 $uname=$this->input->post('u1');
 $pword=$this->input->post('p1');
 $this->load->model('room_model');
 $this->room_model->update($uname,$pword);
 
 
 }
 
 }
 