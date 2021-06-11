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
	


// vriskoume to arxeio
$s="select * from photos where id=$_GET[id]";
$q=mysqli_query($conn,$s);
$row=mysqli_fetch_array($q);

// to svino apo to disko
unlink($row['file']);

// to svino apo tin vasi
$s="delete from photos where id=$_GET[id]";
$q=mysqli_query($conn,$s);

echo "<h1> The file deleted ! </h1>";

}
?>


<?php
include ("down.php");

?>