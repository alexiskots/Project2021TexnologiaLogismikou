<?php

include ("up.php");

?>

<div class="container">
  <h2>System Page</h2>

<?php






if( $_SESSION['u']=="")
{
	echo "
	<div class=\"alert alert-danger\">
  <strong>Error!</strong>  Restrict Entry!
</div>
	
	";
}

else
{
	

	
		include("menu.php");

		if($_GET['a']=='y')
		{
			
			$s="update friends set confirm=1 where id=$_GET[id]";
			mysqli_query($conn,$s);
			
			echo "<h1>You accept your friend</h1>";
			
		}
		
	if($_GET['a']=='n')
		{
			
			$s="delete from friends where id=$_GET[id]";
			mysqli_query($conn,$s);
			
			echo "<h1>You not accept your friend</h1>";
			
		}
		
}
?>


<?php
include ("down.php");

?>