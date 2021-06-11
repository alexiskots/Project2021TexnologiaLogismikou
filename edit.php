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
		
		if($_POST['sv']=='Save')
		{
					$s="update users set username='$_POST[usrins]',
					password='$_POST[pwd]',
					phone='$_POST[phn]',
					address='$_POST[addr]',
					confirm='$_POST[cnf]',
					typos='$_POST[tp]'
					where id=$_GET[id]";
					
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
		if($_POST['sv']=='Delete')
		{
				$s="SELECT * FROM `photos` WHERE id_user=$_GET[id]";
	$tb=mysqli_query($conn,$s);


		while($row=mysqli_fetch_array($tb))
		{
			unlink($row['file']);	
		}
	
			$s="delete FROM `photos` WHERE id_user=$_GET[id]";
			mysqli_query($conn,$s);

			$s="delete FROM `friends` WHERE id_user1=$_GET[id] or id_user2=$_GET[id]";
			mysqli_query($conn,$s);

			
		$s="delete from users where id=$_GET[id]";
					
					if(mysqli_query($conn,$s)){
					
					
					echo "
				<div class=\"alert alert-success\">
			  Your data Deleted !
			</div>
				
				";
					}
					else
					{
						
								echo "
				<div class=\"alert alert-danger\">
			 Deleted Error!
			</div>
				
				";
						
						
					}
		die();
		}
		
		
	}
	
	$s="SELECT * FROM `users` WHERE id=$_GET[id]";
	$tb=mysqli_query($conn,$s);


		$row=mysqli_fetch_array($tb);
	
	
	if($row['confirm']==0) $v='No';
	else $v='Yes';
	
	echo "
	
	
<div class=\"container\">
  <h2>SignUp</h2>
  <form action=\"\" method=post >
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
	<div class=\"form-group\">
      <label for=\"add\">Type:</label>
      <select class=\"form-control\" id=\"tp\"  name=\"tp\" >
	  <option>$row[typos]</option>
	  <option>user</option>
	  <option>admin</option>
	  </select>
    </div>
	
	<div class=\"form-group\">
      <label for=\"cnf\">Confirm:</label>
      <select class=\"form-control\" id=\"cnf\"  name=\"cnf\" >
	  <option value=$row[confirm]>$v</option>
	  <option value=0>No</option>
	  <option value=1>Yes</option>
	  </select>
    </div>
	
    <input type=\"submit\" class=\"btn btn-default\" value='Save' name=sv>
	<input type=\"submit\" class=\"btn btn-default\" value='Delete' name=sv>
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