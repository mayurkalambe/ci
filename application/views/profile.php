
<style>
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
<table  class="CSSTableGenerator">
<tr>
  <th>First Name</th>
  <th><?php print_r ($b[0]->firstname);?></th>  
</tr>
<tr>
  <th>Last Name</th>
  <th><?php print_r ($b[0]->lastname);?></th>  
</tr>
<tr>
  <th>E-mail</th>
  <th><?php print_r ($b[0]->email);?></th>  
</tr>
<tr>
  <th>Username</th>
  <th><?php print_r ($b[0]->username);?></th>  
</tr>
</table>
<center>

<form action='member' method=POST>
<button type=Submit>Back</button></form>

</center>