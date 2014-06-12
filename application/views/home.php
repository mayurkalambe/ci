<html>
<head>
<h1>
My Item Master
</h1>
</head>
<body>
	<pre><marquee behavior="scroll" direction="left">Developed Using Code-Igniter</marquee>  </pre> <br>

<table style="style.css">

<tr>
  <th>Items</th>
  <th>In Stock</th> 
  <th> </th>
  <th> </th>
</tr>

<?php
for($i=0; $i<8; $i++) {
?>
<tr>
  
  <td> <?php echo $rd[$i]->Items;//print_r($rd)?>  </td>
  <td> <?php echo $rd[$i]->Current;//print_r($rd)?>  </td>
  <td> 
		<form action="http://localhost/ci/index.php/site/page" method=POST>  
			<input type=hidden name="buy" value=<?php echo $rd[$i]->ID ?> />
			<input type=hidden name="name1" value=<?php echo $rd[$i]->Items ?> />
			<input type=hidden name="verb" value=0/>			
			<button type="submit">Buy!</button>
		</form> 
	</td> 
	  <td> 
			<form action="http://localhost/ci/index.php/site/page" method=POST>  
				<input type=hidden name="sell"  value=<?php echo $rd[$i]->ID ?>  />
				<input type=hidden name="name2" value=<?php echo $rd[$i]->Items ?> />
				<input type=hidden name="verb" value=1/>
				<button type="submit">Sell!</button>
			</form> 
		</td>
  
	
<?php
}
?>


</body>
</html>