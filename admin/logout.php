<?php   
session_start(); //to ensure you are using same session
session_unset();

session_destroy();
unset($_SESSION['user_id']);
    header("Location:../login.php");

    exit();
 
?>
<!-- 
// if(isset($_SESSION['LOGOUT'])) {
    
    //      unset($_SESSION['name']);
    //     // echo 'logout'; 
    // }
    // session_destroy(); -->
    