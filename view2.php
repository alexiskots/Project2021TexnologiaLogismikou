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
	

	





?>


<table class=table>
<tr><th>FileName</th><th>Description</th><th>Type</th><th>Action</th></tr>
<?php
$s="select * from photos where id_user=$_GET[id]";
$q=mysqli_query($conn,$s);
while ($row=mysqli_fetch_array($q))
{
if(substr($row['typos'], 0, 5)=="image")	
	echo "<tr><td><img src='$row[file]' width=80px></td><td>$row[perigrafi]</td><td>$row[typos]</td><td><a href=view22.php?id=$row[id]>View</a></td></tr>";
else
	if(substr($row['typos'], 0, 5)=="video")
	echo "<tr><td>

<video width=\"100\" height=\"100\" controls>
  <source src=\"$row[file]\" type=\"$row[typos]\">
</video>
</td><td>$row[perigrafi]</td><td>$row[typos]</td><td><a href=view22.php?id=$row[id]>View</a></td></tr>";
    else
		echo "<tr><td>$row[file]</td><td>$row[perigrafi]</td><td>$row[typos]</td><td><a href=view22.php?id=$row[id]>View</a></td></tr>";
	




}
?>
</table>
</div>

<?php
}
include ("down.php");

?>