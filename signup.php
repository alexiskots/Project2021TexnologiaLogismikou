<?php

include ("up.php");
?>

<div class="container">
  <h2>SignUp</h2>
  <form action="insert.php" method=post >
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
    <button type="submit" class="btn btn-default">Sign Up</button>
  </form>
<br><br>

</div>


<?php
include ("down.php");

?>