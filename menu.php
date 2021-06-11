<?php

if($_SESSION['t']=='admin')
{
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">MSocial</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Users<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="listu.php">List</a></li>
            <li><a href="adduser.php">Add users</a></li>
          </ul>
        </li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php

}
if($_SESSION['t']=='user' && $_SESSION['c']==1)
{
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">MSocial</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Friend<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="friends.php">List</a></li>
            <li><a href="addfriend.php">Add Friend</a></li>
          </ul>
        </li>
     
		<li><a href="files.php">Files</a></li>
		<li><a href="profile.php">Profil</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>


<?php
}


if($_SESSION['t']=='user' && $_SESSION['c']==0)
{
	?>
	
	
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">MSocial</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      
		<li><a href="profile.php">Profil</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

	
	<?php
	
	
}
?>