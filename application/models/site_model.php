<?php

class Site_model extends CI_Model {
function getall(){

$query1 = $this->db->query('SELECT  * FROM stock');
if($query1->num_rows() > 0)
{
foreach ($query1->result() as $row)
{
$data[] = $row;
}
return $data;
}
}

function buyg(){
	$type= $_POST['type'];
      $id= $_POST['id'];
      $quantity = $_POST['quantity'];
	  


if( $type == "buy" )
{
	$this->db->simple_query("UPDATE stock SET Current=Current+$quantity WHERE ID=$id");}
else
	{$this->db->simple_query("UPDATE stock SET Current=Current-$quantity WHERE ID=$id");}
	$this->load->helper('url');
	
	 redirect('http://localhost/ci/index.php/site/msk', 'refresh');
	
	}

}
?>

