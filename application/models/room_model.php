<?php
$data=array();
class Room_model extends CI_Model {


function getall($u, $p){




$query = $this->db->query("SELECT password FROM userdata WHERE users='$u'");
 if ($query->num_rows() > 0) {
   $pass =$query->row_array();
   if($pass['password']==$p )
   {
   echo "login Success";
   }
   else{ echo "Error in Username/Password"; }
   
  }
  else{ echo "Error in Username/Password"; }
  
}

function update($m, $n){

$query = $this->db->query("INSERT INTO userdata(users, password) VALUES('$m' , '$n')");

echo "You have been Registered Successfully ! You can Login Now :) ";

?>
<br>
<form action="http://localhost/ci/index.php/room/home" method=POST>
<input type=Submit Value="Sign in" size="10">


<?php
}
}