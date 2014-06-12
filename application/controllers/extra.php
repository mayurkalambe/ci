<?php
class Extra extends CI_Controller{
function Page1(){
	$a= $_POST['buy'];
$this->load->view('buy',$a);
}
	function Page2(){
	$b=$_POST['sell'];
$this->load->view('sell', $b);
}
}
?>
