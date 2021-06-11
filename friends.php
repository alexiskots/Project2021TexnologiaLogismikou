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

<h2>Requests</h2>
<table class=table>
<tr><th>Username</th><th>Phone</th><th>Address</th><th>Action</th></tr>
<?php
$s="select *,friends.id as idu from users, friends where 
	 (id_user2=$_SESSION[id] and users.id=id_user1)
	   and friends.confirm=0";
	
$q=mysqli_query($conn,$s);
while ($row=mysqli_fetch_array($q))
{
	
	echo "<tr><td>$row[username]</td><td>$row[phone]</td><td>$row[address]</td><td><a href=accept2.php?id=$row[idu]&a=y>Accept</a> | <a href=accept2.php?id=$row[idu]&a=n>Not Accept</a></td></tr>";




}


echo "</table>";
echo "<h2>My Friends</h2>";
echo "<table class=table>";




$s="select *,users.id as idu from users, friends where 
	( (id_user1=$_SESSION[id] and users.id=id_user2) or 
	  (id_user2=$_SESSION[id] and users.id=id_user1)
	   ) and friends.confirm=1 order by username";
$q=mysqli_query($conn,$s);
while ($row=mysqli_fetch_array($q))
{
	
	echo "<tr><td>$row[username]</td><td>$row[phone]</td><td>$row[address]</td>
	<td><a href=view2.php?id=$row[idu]>View</a> | <a href=chat.php?id=$row[idu]>Chat</a></td></tr>";




}
?>
</table>
</div>

<?php
}
include ("down.php");

?>