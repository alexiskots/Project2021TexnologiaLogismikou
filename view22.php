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
	



$s="select * from photos where id=$_GET[id]";
$q=mysqli_query($conn,$s);
while ($row=mysqli_fetch_array($q))
{
if(substr($row['typos'], 0, 5)=="image")
{	
	echo "<img src='$row[file]' ><br><br>
";
}
else
if(substr($row['typos'], 0, 5)=="video")
	echo "
<video width=\"600px\" height=\"400px\" controls>
  <source src=\"$row[file]\" type=\"$row[typos]\">
</video>
<br><br>

";
    else
		echo "<a href='file://$row[file]'>Download</a>
	<br><br>
	";
	




}
}
?>


<?php
include ("down.php");

?>