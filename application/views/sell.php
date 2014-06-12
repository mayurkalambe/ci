Number of  <?php echo $nam2."". " "; ?> Sold <br>

<form action="http://localhost/ci/index.php/site/buy1" method=POST> 
	<input type=text name="quantity" /> <br>
	<input type=hidden name="id" value="<?php echo $val1 ?>" /> 
	<input type=hidden name="type" value="sell" /> 
	<input type= submit Value="Submit">
</form>