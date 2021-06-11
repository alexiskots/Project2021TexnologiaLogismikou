<?php

include ("up.php");

?>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("messages").innerHTML = this.responseText;
    }
  };
  <?php
  echo "xhttp.open(\"GET\", \"ajax_chat.php?id=$_GET[id]\", true);";
  
  ?>
  xhttp.send();
}

</script>
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
		
			$s="update message set readed=1 where id_sender=$_GET[id] and id_rec=$_SESSION[id]";
			mysqli_query($conn,$s);
		
	
	if(isset($_POST['msg']))
	{
		
		$s="insert into message(id_sender,id_rec,msg,date_s,readed) values ($_SESSION[id],$_GET[id],'$_POST[msg]',now(),0)";
		mysqli_query($conn,$s);
		
	}

$s="select * from users where id=$_GET[id]";
$q=mysqli_query($conn,$s);
$row=mysqli_fetch_array($q);

$uu=$row['username'];
echo "<h2>Chat with $uu</h2>";


echo "
<form action='' method=post>
<textarea cols=100 rows=3 name=msg></textarea><br>
<input type=submit value='send'>
</form>

";







?>

<div id=messages>



</div>



<script>
loadDoc();
setInterval(function() { loadDoc(); }, 1000);
</script>
</div>

<?php
}
include ("down.php");

?>