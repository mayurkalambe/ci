Number of <?php echo $nam1."". " "; ?> bought <br>

<form action="http://localhost/ci/index.php/site/buy1" method=POST> 
	<input type=text name="quantity" /> <br>
	<input type=hidden name="id" value="<?php echo $val ?>" />
	<input type=hidden name="type" value="buy" /> 
	<input type= submit Value="Submit">
</form>