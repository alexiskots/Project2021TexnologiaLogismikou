<?php

include ("up.php");
?>

<div class="container">
  <?php
  
    $s="INSERT INTO users(id, username, password, phone, address,typos,confirm) 
	VALUES (NULL,'$_POST[usr1]','$_POST[pwd]','$_POST[phn]','$_POST[addr]','user','0');";
	if(mysqli_query($conn,$s))
	{
		echo "
			<div class=\"container\">
			<h2>Your record saved</h2>
			<a href='index.php'>Try to Login</a>
		
			</div>
		";
		
	}
	else
	{
		echo "
			<div class=\"container\">
			<h2>This Username already exists</h2>
			<a href='index.php'>Back</a>
			</div>
		";
		
	}


  
  ?>
</div>


<?php
include ("down.php");

?>