<?php
    
$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'dbconnect.php';   
    
    $name = $_POST["name"]; 
    $email = $_POST["email"];  
    $address = $_POST["address"]; 
    $mobile=$_POST['mobile'];
    $password = $_POST["password"]; 
    $cpassword = $_POST["cpassword"]; 

      
    $sql = "SELECT * FROM `users` WHERE `user_name` = '$name' ";
    
    $result = mysqli_query($conn, $sql);
    
 
    $num = mysqli_num_rows($result); 
    
    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num == 0) {
        if(($password == $cpassword) && ($exists==false)) {
    

            // Password Hashing is used here. 
            $query =  "INSERT INTO `users`(`user_name`, `user_type`, `email`, `address`, `phone_no`, `password`)
             VALUES('$name','user','$email','$address','$mobile','$password')";

        
    
            $result = mysqli_query($conn, $query);
    
            if ($result==1) {
                
                header("location: login.php");
                
            }
        } 
        else { 
            echo "Passwords do not match"; 
        }      
    }// end if 
    
   if($num>0) 
   {
     echo "Username already exist"; 
   } 
    
}//end if   
    
?>