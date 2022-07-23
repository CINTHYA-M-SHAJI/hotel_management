<?php
session_start();
include '../dbconnect.php';
$email = $_SESSION['email'];

?>

<html>
    <head>
</head>
<body>
<?php

$sql = "SELECT `user_name`, `address`, `email`, `phone_no`, `user_type` FROM `users` WHERE `email` = '$email'";
mysqli_query($conn,$sql);
	$result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
	$name = $row["user_name"];
    $usertype = $row["user_type"];



// $sql = "SELECT `user_type` FROM `users` WHERE `user_id`=2";
// $sql1=$conn->query("SELECT `user_type` FROM `users` WHERE `user_id`=2");
// echo $sql1;
// echo "hi";
// $pazham = mysqli_query($conn,$sql);


// echo $pazham;
?>

<table border="1">
    <tr>
    <th>USER NAME</th>
    <th>ADDRESS</th>
    <th>EMAIL</th>
    <th>MOBILE</th>
</tr>


    <tr>
    <td><?php echo $row["user_name"]?></td>
    <td><?php echo $row["address"]?></td>
    <td><?php echo $row["email"]?></td>
    <td><?php echo $row["phone_no"]?></td>
   
</tr>

</body>
</html>

