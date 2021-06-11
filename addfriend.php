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

		echo "
			<form action='addfriend.php' method=post>
				Search: <input type=text name=susr> <input type=submit value=search>
			
			</form>
		
		";
		

		$p=@$_POST['susr'];
		if(strlen($p)>2)
		{
		
		$s="select * from users where username like '$p%' and id<>$_SESSION[id] and confirm=1";
			$q=mysqli_query($conn,$s);
			while ($row=mysqli_fetch_array($q))
			{
				echo "$row[username] <a href=req.php?id=$row[id]>Request</a><br>";
			}
		}
	
}
?>


<?php
include ("down.php");

?>