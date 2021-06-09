<?php

include ("up.php");
?>

<div class="container">
  <h2>MY console Message</h2>
  <form action="login.php" method=post>
    <div class="form-group">
      <label for="usr">Username:</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter Username" name="usr1">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <button type="submit" class="btn btn-default">Login</button>
  </form>
<br><br>
if you are new in the system please <a href='signup.php'>signup</a>
</div>


<?php
include ("down.php");

?>