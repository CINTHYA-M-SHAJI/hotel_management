<?php 
session_start();
?>

<?php

include 'dbconnect.php'; ?> 
<html>
    <head>
    <title>PROFILE</title>
    </head>
    <body>
<style>
    body{
        background-image: url("../images/bg_8.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    
    }
        
    </style>
   
<a href="user_home.php"><button align="left">HOME</button></a>
<a href="user_update.php"><button>UPDATE PROFILE</button></a>
<a href="user_delete.php"><button>DELETE PROFILE</button></a>
<br>



<?php
$userid=$_SESSION['user_id'];
$sql="SELECT `user_type` FROM `users` WHERE `user_id`=$userid";
$res=mysqli_fetch_array($conn,$sql);
echo $res;
echo $sql;
    
echo $result;
echo "hi";
echo $conn;

    ?>

   <table border=1>
    <tr>
    <th>USER ID</th>
    <th>USER NAME</th>
    <th>ADDRESS</th>
    <th>EMAIL</th>
    <th>MOBILE</th>
</tr>
 

   
   
    
    <!-- if (mysqli_num_rows($result) > 0) {
  
   
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .$row["user_id"]. "</td>";
        echo "<td>" .$row["user_name"]. "</td>";
        echo "<td>" .$row["address"]. "</td>";
        echo "<td>" .$row["email"]. "</td>";
        echo "<td>" .$row["phone_no"]. "</td>";
   
        echo "</tr>";

    }
echo "</table>";
$sql="SELECT `user_type` FROM `users` WHERE `user_id`=$userid";
$result = mysqli_query($conn,$sql);
echo $result;
    }
    else{
    echo "No result found";
    }
  echo $row;
    $conn->close();
    ?> -->

</body>
</html>