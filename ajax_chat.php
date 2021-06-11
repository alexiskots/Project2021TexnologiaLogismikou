<?php
include ("connect.php");
$s="select * from users where id=$_GET[id]";
$q=mysqli_query($conn,$s);
$row=mysqli_fetch_array($q);

$uu=$row['username'];

$s="select * from message where (id_sender=$_SESSION[id] and id_rec=$_GET[id])
	or (id_sender=$_GET[id] and id_rec=$_SESSION[id]) order by id desc";
$q=mysqli_query($conn,$s);
while ($row=mysqli_fetch_array($q))
{
	if($row['id_sender']==$_SESSION['id'])
	{
		echo "
		<div style='background-color:#afa; width:400px; border-radius:20px;padding:20px;margin-top:20px;'>
		You: <br>
		$row[msg] <br><br>
		<i>$row[date_s]</i>
		
		</div>
		
		";
	}
	else
	{
		echo "
		<div style='background-color:#faa; width:400px; border-radius:20px; margin-left:120px;padding:20px;margin-top:20px;'>
		$uu: <br>
		$row[msg] <br><br>
		<i>$row[date_s]</i>
		
		</div>
		
		";
	}

}

?>