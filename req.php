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

		
				$id1=$_SESSION['id'];
				$id2=$_GET['id'];
		
		
		$s="select * from friends where 
	( (id_user1=$_SESSION[id] and id_user2=$id2) or 
	  (id_user2=$_SESSION[id] and id_user1=$id2)
	   ) ";
	   
	   $q=mysqli_query($conn,$s);
	   if(mysqli_num_rows($q)==0)
	   {
		$s="insert into friends(id_user1,id_user2,confirm) values($id1,$id2,0) ";
		
			if($q=mysqli_query($conn,$s))
			{
				echo "<h1> Your request send </h1>";
			}
			else
			{
				echo "<h1> You already send request or you are friends </h1>";
			}
	   }
	   else
		   echo "<h1> You already send request or you are friends </h1>";
}
?>


<?php
include ("down.php");

?>