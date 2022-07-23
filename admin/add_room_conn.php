<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    include '../dbconnect.php';

    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }


   
    $room_no= $_POST['room_no'];
    $room_type= $_POST['room_type'];
    $no_beds= $_POST['no_beds'];
    $images= $_POST['images'];
  


    $sql = "SELECT * FROM `room` WHERE `room_no` = '$room_no' ";
    
    $result = mysqli_query($conn, $sql);
    
 
    $num = mysqli_num_rows($result); 
    
    // INSERT INTO `room`(`room_id`, `no_of_room`, `room_no`, `room_type`, `no_beds`, `images`)
    //  VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')
    $sql = "INSERT INTO `room`(`room_no`, `room_type`, `no_beds`, `images`,`status`) VALUES ('$room_no', '$room_type', '$no_beds','$images','available')";
  
//   echo "working";
  if($num==0){
    if ($conn->query($sql)===TRUE) {
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('New room record successfully');
    window.location.href='view_room.php';
    </script>");
        // header("location: ../admin/view_room.php");
        // echo "New room record successfully";

      } 
      else {
        echo "Error: " ;
      }
  
  }else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('already room is vacant');
    window.location.href='add_room.php';
    </script>");
    // echo '<script>alert("already room is vacant")</script>';
    // window.location.href = "/add_room.php";
  }

   
  
}

?>
