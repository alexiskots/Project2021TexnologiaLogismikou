<?php

include ("up.php");

?>

<div class="container">
  <h2>System Page</h2>

<?php
if(isset($_POST['usr1']))
{
	
	$s="SELECT * FROM `users` WHERE username='$_POST[usr1]' and password='$_POST[pwd]'";
	$tb=mysqli_query($conn,$s);

	if(mysqli_num_rows($tb)>0)
	{
		$row=mysqli_fetch_array($tb);
		$_SESSION['id']=$row['id'];
			$_SESSION['u']=$row['username'];
			$_SESSION['t']=$row['typos'];
			$_SESSION['c']=$row['confirm'];
			
	}
	else
	{
		$_SESSION['u']="";
	}
}





if( $_SESSION['u']=="")
{
	echo "
	<div class=\"alert alert-danger\">
  <strong>Error!</strong> This Username  or Password not exists. or connection Error
</div>
	
	";
}

else
{
	
		include("menu.php");
	
	echo "<h2>Wellcome to the Social System</h2>";
	
}


?>

</div>

<?php
include ("down.php");

?>