<?php
session_start();
// $name=$_SESSION['name'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home_User</title>
<style>
body{
  background-image: url("images/wp3264677.webp");
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>

<body  align="center">
<form align='center'>
  <h1><center>Hotel Management System</center></h1>
  <h3><center>Book Your Room</center></h3>
  USER NAME: <input type="text" readonly value="<?php echo $_SESSION['user_name'];?>">

  <button formaction="profile.php"> PROFILE</a></button>
  <button formaction="../user/view_room.php">View Room</a></button>
  <button formaction="../user/logout.php">LOGOUT</a></button>

  </a></button>


</form>
<?php

// echo $_SESSION['user_id'];
//     echo $name;?>
</body>
</html>