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



<div class="container">
 <h2>AddUsers</h2>
  <form action="insertu.php" method=post >
    <div class="form-group">
      <label for="usr">Username:</label>
      <input type="text" class="form-control" id="usr" required placeholder="Enter Username" name="usr1">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" required placeholder="Enter password" name="pwd">
    </div>
	<div class="form-group">
      <label for="ph1">Phone:</label>
      <input type="text" class="form-control" id="ph1" required placeholder="Enter Phone" name="phn">
    </div>
	<div class="form-group">
      <label for="add">Address:</label>
      <input type="text" class="form-control" id="add" placeholder="Enter Address" name="addr">
    </div>
	<div class="form-group">
      <label for="tp">Type:</label>
      <select  class="form-control" id="tp"  name="tp">
	  <option>user</option>
	  
	  <option>admin</option>
	  
	  </select>
    </div>
	
	
    <button type="submit" class="btn btn-default">Sign Up</button>
  </form>
<br><br>

</div>

</div>

<?php
}
include ("down.php");

?>