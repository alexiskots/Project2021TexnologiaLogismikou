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
	
		if(isset($_POST['upl']))
	{
		$tp=$_FILES['fl']['type'];
		$fl="uploads/$_SESSION[id]_".rand(100,999).rand(100,999).rand(100,999).$_FILES['fl']['name'];
		if(move_uploaded_file($_FILES['fl']['tmp_name'], $fl))
		{
			
			$s="INSERT INTO photos(id_user,file,typos,perigrafi) values ($_SESSION[id], '$fl','$tp','$_POST[dsc]')";
			if(mysqli_query($conn,$s)){
				echo"	<div class=\"alert alert-success\">
  Your File Inserted !
</div>
			";
		}
			else
			{
								echo "
	<div class=\"alert alert-danger\">
 Saved Error!
</div>
	
	";	
	
	unlink($fl);  // svinei to arxeio mas
				
			}
				
			
		}
		else
		{
				echo "
	<div class=\"alert alert-danger\">
 Saved Error!
</div>
	
	";
			
			
		}
	
		
		
	}	
	

}



?>

<form action='files.php' method=post enctype='multipart/form-data'>

File: <input type=file name=fl  > 
</select>
Description: <input type=text name=dsc>
<input type=submit value='Upload' name=upl>


</form>
<table class=table>
<tr><th>FileName</th><th>Description</th><th>Type</th><th>Action</th></tr>
<?php
$s="select * from photos where id_user=$_SESSION[id]";
$q=mysqli_query($conn,$s);
while ($row=mysqli_fetch_array($q))
{
if(substr($row['typos'], 0, 5)=="image")	
	echo "<tr><td><img src='$row[file]' width=80px></td><td>$row[perigrafi]</td><td>$row[typos]</td><td><a href=view.php?id=$row[id]>View</a></td></tr>";
else
	if(substr($row['typos'], 0, 5)=="video")
	echo "<tr><td>

<video width=\"100\" height=\"100\" controls>
  <source src=\"$row[file]\" type=\"$row[typos]\">
</video>
</td><td>$row[perigrafi]</td><td>$row[typos]</td><td><a href=view.php?id=$row[id]>View</a></td></tr>";
    else
		echo "<tr><td>$row[file]</td><td>$row[perigrafi]</td><td>$row[typos]</td><td><a href=view.php?id=$row[id]>View</a></td></tr>";
	




}
?>
</table>
</div>

<?php
include ("down.php");

?>