<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){

include 'dbconnect.php';

 
    $date= $_POST['f_date'];
    $room_id= $_SESSION['room_id'];

    // $sql="SELECT `carid` FROM `car` WHERE `stock`!=0;"

    $userid=$_SESSION['user_id'];
   
//    INSERT INTO `booking`(`room_no`, `user_name`, `date`) VALUES ('$room_no', '$name', '$date')
   
   $sql = " INSERT INTO `booking`(`room_id`, `user_id`, `date`)
     VALUES ('$room_id', '$userid', '$date')";
 
//   echo $sql;

    $sql1 = "UPDATE `room` SET `status`='booked' WHERE `room_id` = '$room_id'";
    // echo $sql1;

    $result1=mysqli_query($conn,$sql1);
    
    $result=mysqli_query($conn,$sql);

  
   
    
   
   
    if($result) {
     if($result1) {
   
        echo "Booking successfully";
        // header('Location:../user/view_car_user.php');
      }
  }
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
  }

?>
