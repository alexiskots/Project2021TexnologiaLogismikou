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
	
		if(isset($_POST['sv']))
	{
		$s="update users set username='$_POST[usrins]',
		password='$_POST[pwd]',
		phone='$_POST[phn]',
		address='$_POST[addr]'
		where id=$_SESSION[id]";
		
		if(mysqli_query($conn,$s)){
		
		
		echo "
	<div class=\"alert alert-success\">
  Your data saved !
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
			
			
		}
		
		
	}
	
	$s="SELECT * FROM `users` WHERE id=$_SESSION[id]";
	$tb=mysqli_query($conn,$s);


		$row=mysqli_fetch_array($tb);
	
	echo "
	
	
<div class=\"container\">
  <h2>SignUp</h2>
  <form action=\"profile.php\" method=post >
    <div class=\"form-group\">
      <label for=\"usr\">Username:</label>
      <input type=\"text\" class=\"form-control\" id=\"usr\" required placeholder=\"Enter Username\" name=\"usrins\" value='$row[username]'>
    </div>
    <div class=\"form-group\">
      <label for=\"pwd\">Password:</label>
      <input type=\"password\" class=\"form-control\" id=\"pwd\" required placeholder=\"Enter password\" name=\"pwd\" value='$row[password]'>
    </div>
	<div class=\"form-group\">
      <label for=\"ph1\">Phone:</label>
      <input type=\"text\" class=\"form-control\" id=\"ph1\" required placeholder=\"Enter Phone\" name=\"phn\" value='$row[phone]'>
    </div>
	<div class=\"form-group\">
      <label for=\"add\">Address:</label>
      <input type=\"text\" class=\"form-control\" id=\"add\" placeholder=\"Enter Address\" name=\"addr\" value='$row[address]'>
    </div>
    <input type=\"submit\" class=\"btn btn-default\" value='Save' name=sv>
  </form>
<br><br>

</div>
	
	
	
	
	
	
	
	
	";
	
}


?>

</div>

<?php
include ("down.php");

?>