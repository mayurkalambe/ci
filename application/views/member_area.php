<style>
		body {
		background-image:url("http://wallalay.com/wp-content/uploads/2014/05/Background-Wallpaper-Flowers-22.jpg");
		}
		#login_form{
		width:300px;
		background: f0f0f0 url(../images/1.jpg)
		border: 1px solid white;
		margin : 250px auto 0;
		padding: 1em;
		-moz-border-radius:3px;
		}
		h1,h2,h3,h4,h5{
		margin-top:0;
		font-family: arial black, arial;
		text-align: center;
		}
		input[type=text], input[type=password]{
		display:block;
		margin:0 0 1em 0;
		width: 280px;
		border:5px;
		-moz-border-radius:1px;
		-webkit-border-radius: 1px;
		padding: 1em;
		}
		input[type=submit], form a{
		border:none;
		margin-right:1em;
		padding:6px;
		text-decoration: none;
		font-size: 12px;
		-moz-border-radius: 4px;
		-webkit-border-radius = 4px;
		background : #348075;
		color: white;
		box-shadow: 0 1px 0 white;
		-moz-box-shadow: 0 1px 0 white;
		-webkit-box-shadow: 0 px 0 white;
		}

		input[type=submit]:hover, form a:hover {
		background: #287368;
		cursor : pointer;
		}

		

		.error{
		color : #393939;
		font-size: 15px;
		}
		fieldset{
		width : 300px;
		margin: auto;
		margin-bottom: 2em;
		display: block;
		}
		body {
		background-image:url("http://wallalay.com/wp-content/uploads/2014/05/Background-Wallpaper-Flowers-22.jpg");
		}
		#login_form{
		width:300px;
		background: f0f0f0 url(../images/1.jpg)
		border: 1px solid white;
		margin : 250px auto 0;
		padding: 1em;
		-moz-border-radius:3px;
		}
		h1,h2,h3,h4,h5{
		margin-top:0;
		font-family: arial black, arial;
		text-align: center;
		}
		input[type=text], input[type=password]{
		display:block;
		margin:0 0 1em 0;
		width: 280px;
		border:5px;
		-moz-border-radius:1px;
		-webkit-border-radius: 1px;
		padding: 1em;
		}
		input[type=submit], form a
		{
		border:none;
		margin-right:1em;
		padding:6px;
		text-decoration: none;
		font-size: 12px;
		-moz-border-radius: 4px;
		-webkit-border-radius = 4px;
		background : #348075;
		color: white;
		box-shadow: 0 1px 0 white;
		-moz-box-shadow: 0 1px 0 white;
		-webkit-box-shadow: 0 px 0 white;
		
		.myButton {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #44c767), color-stop(1, #5cbf2a));
	background:-moz-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:-webkit-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:-o-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:-ms-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:linear-gradient(to bottom, #44c767 5%, #5cbf2a 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#44c767', endColorstr='#5cbf2a',GradientType=0);
	background-color:#44c767;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	border:1px solid #aba419;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:17px;
	padding:16px 31px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #5cbf2a), color-stop(1, #44c767));
	background:-moz-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-webkit-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-o-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-ms-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:linear-gradient(to bottom, #5cbf2a 5%, #44c767 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5cbf2a', endColorstr='#44c767',GradientType=0);
	background-color:#5cbf2a;
}
.myButton:active {
	position:relative;
	top:1px;
}

		}
	</style>

<div id=member_area>

<h1>Welcome <?php print_r($this->session->userdata['username']);?></h1>
<center> <img src="../../../upload/<?php echo $this->session->userdata['username']?>.jpg"  width="142" height="142"> </center>
<h2>List of Available Rooms</h2>

<style>
#ts_tabmenu {
    font-size: 2em;
    padding: 20px 0px 0px 20px;
}
#ts_tabmenu ul
{
    line-height: 1em;
    margin: 0px;
    list-style-type: none;
    float: left;
    padding: 0px 0px 0px 5px;
	text-align: center;
}
#ts_tabmenu ul li
{
    float: ;
	
}
#ts_tabmenu ul li a
{
    text-decoration: none;
    display: block;
    float: left;
    padding: 0px 0px 0px 10px;
    background: url(tabs.gif) no-repeat left top;
    margin-left: -5px;
    z-index: 0;
    position: relative;
    color: #666666;
}
#ts_tabmenu ul li a strong
{
    font-weight: normal; /* remove the bold effect */
    display: block;
    background: url(tabs.gif) no-repeat right top;
    padding: 6px 10px 7px 5px;
    cursor: pointer;
}
#ts_tabmenu ul li a:hover
{
    position: relative;
    z-index: 5;
    background: url(tabs.gif) no-repeat left bottom;
    color: #000000;
}
#ts_tabmenu ul li a:hover strong
{
    background-image: url(tabs.gif) no-repeat;
    position: relative;
    z-index: 5;
    background-position: right bottom;
}
</style>
<body>
<div id="ts_tabmenu">

    <ul>
        <li><a href='logo'><strong>Upload Image</strong></a></li>
        <li><a href='editp'><strong>Edit Profile</strong></a></li>
        <li><a href='viewp'><strong>View Profile</strong></a></li>
		<li><a href='inbox'><strong>Messages(INBOX)</strong></a></li>
    </ul>

</div>
</body>
<body >



<center>
 <style>

<body>
.CSSTableGenerator {
margin:0px;padding:0px;
width:100%;	box-shadow: 10px 10px 5px #888888;
border:1px solid #3f7f00;

-moz-border-radius-bottomleft:0px;
-webkit-border-bottom-left-radius:0px;
border-bottom-left-radius:0px;

-moz-border-radius-bottomright:0px;
-webkit-border-bottom-right-radius:0px;
border-bottom-right-radius:0px;

-moz-border-radius-topright:0px;
-webkit-border-top-right-radius:0px;
border-top-right-radius:0px;

-moz-border-radius-topleft:0px;
-webkit-border-top-left-radius:0px;
border-top-left-radius:0px;
}

.CSSTableGenerator table
{
width:100%;
height:100%;
margin:0px;padding:0px;
}

.CSSTableGenerator th,tr,td
{
	width= 50px;
}

.CSSTableGenerator tr:last-child td:last-child 
{
-moz-border-radius-bottomright:0px;
-webkit-border-bottom-right-radius:0px;
border-bottom-right-radius:0px;
}

.CSSTableGenerator table tr:first-child td:first-child 
{
-moz-border-radius-topleft:0px;
-webkit-border-top-left-radius:0px;
border-top-left-radius:0px;
}

.CSSTableGenerator table tr:first-child td:last-child 
{
-moz-border-radius-topright:0px;
-webkit-border-top-right-radius:0px;
border-top-right-radius:0px;
}
.CSSTableGenerator tr:last-child td:first-child
{
-moz-border-radius-bottomleft:0px;
-webkit-border-bottom-left-radius:0px;
border-bottom-left-radius:0px;
}
.CSSTableGenerator tr:hover td
{

}
.CSSTableGenerator tr:nth-child(odd){ background-color:#d4ffaa; }
.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }
.CSSTableGenerator td
{
vertical-align:middle;
border:1px solid #3f7f00;
border-width:0px 1px 1px 0px;
text-align:left;
padding:5px;
font-size:10px;
font-family:arial;
font-weight:normal;
color:#000000;
}
.CSSTableGenerator tr:last-child td
{
border-width:0px 1px 0px 0px;
}
.CSSTableGenerator tr td:last-child
{
border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:last-child td:last-child
{
border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td
{
	background:-o-linear-gradient(bottom, #5fbf00 5%, #3f7f00 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #5fbf00), color-stop(1, #3f7f00) );	background:-moz-linear-gradient( center top, #5fbf00 5%, #3f7f00 100% );	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#5fbf00", endColorstr="#3f7f00");	background: -o-linear-gradient(top,#5fbf00,3f7f00);
background-color:#5fbf00;
border:0px solid #3f7f00;
text-align:center;
border-width:0px 0px 1px 1px;
font-size:14px;
font-family:arial;
font-weight:bold;
color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td
{
	background:-o-linear-gradient(bottom, #5fbf00 5%, #3f7f00 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #5fbf00), color-stop(1, #3f7f00) );	background:-moz-linear-gradient( center top, #5fbf00 5%, #3f7f00 100% );	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#5fbf00", endColorstr="#3f7f00");	background: -o-linear-gradient(top,#5fbf00,3f7f00);
background-color:#5fbf00;
}
.CSSTableGenerator tr:first-child td:first-child
{
border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child
{
border-width:0px 0px 1px 1px;
}
</style>
<table align=right class="CSSTableGenerator">
<tr>
  <th>Other Registered Users</th>
  <th>Message</th>    
</tr>
<?php
for($i=0;  $i<$c; $i++){
if($b[$i]->username != $this->session->userdata['username'])
{
?>
<tr>
	<th><?php echo $b[$i]->username; ?></th>
	<th><form action="message" method=POST> <input type=hidden name="name" value="<?php echo $b[$i]->username;?>"> <input type=submit value="Send Message"></form></th>
	
</tr>
<?php  }} ?>
</table>
<table  class="CSSTableGenerator">
<tr>
  <th>ID</th>
  <th>Rooms</th>
  <th>Booking Status</th>
  <th>Booked By</th>
  <th>Book</th>
  <th>Cancel</th>
 
</tr>
<?php
for($i=0;  $i<8; $i++){

?>
<tr>
	<th><?php echo $a[$i]->id; ?></th>
	<th><?php echo $a[$i]->roomname; ?></th>
	<th><?php echo $a[$i]->status;?></th>
	<th><?php echo $a[$i]->bookedby;?></th>
	<th><?php if($a[$i]->status== "available"){?><form action="book" method=POST> <input type=hidden name="id" value="<?php echo $a[$i]->id;?>"> <input type=submit value="Book Now!"></form> <?php } else{ echo "Already Booked!"; }?> </th>
	<?php if($a[$i]->bookedby==$this->session->userdata['username']) {echo "<th><form action=cancel method=POST><input type=hidden name=id value=" ."". $a[$i]->id ."". "><button type=submit>Cancel Your Booking</button></form></th>";}else{}?>
</tr>
<?php  } ?>
</center>
</table>


<form action="http://localhost/ci/index.php/special/logout" method=POST>

<center>

                                                                  
 
 <input type=submit value="Logout!"></form> </center>
