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
	
	



echo "</table>";
echo "<h2>For Confirm Users</h2>";
echo "<table class=table>";




$s="select * from users where confirm=0 and typos<>'admin' order by username";
$q=mysqli_query($conn,$s);
while ($row=mysqli_fetch_array($q))
{
	
	echo "<tr><td>$row[username]</td><td>$row[phone]</td><td>$row[address]</td><td><a href=edit.php?id=$row[id]>Edit</a> 
	|<a href=view2.php?id=$row[id]>View</a></td></tr>";




}

echo"</table>";

$susr=@$_POST['susr'];
echo "<form action='' method=post><input type=text name=susr value='$susr'><input type=submit value='Search'></form>";
echo "</table>";
echo "<h2>Users</h2>";
echo "<table class=table>";




$s="select * from users where concat(username,phone,address) like '%$susr%'order by username";
$q=mysqli_query($conn,$s);
while ($row=mysqli_fetch_array($q))
{
	
	echo "<tr><td>$row[username]</td><td>$row[typos]</td><td>$row[phone]</td><td>$row[address]</td><td>
	<a href=edit.php?id=$row[id]>Edit</a> |<a href=view2.php?id=$row[id]>View</a>  |<a href=chat.php?id=$row[id]>Chat</a></td></tr>";




}

echo"</table>";
?>
</div>

<?php
}
include ("down.php");

?>