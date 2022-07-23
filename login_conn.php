<?php
session_start();

    
$showAlert = false; 
$showError = false; 
$exists=false;

    
if($_SERVER["REQUEST_METHOD"] == "POST") {

    // Include file which makes the
    // Database Connection.
    include 'dbconnect.php';  

    
	$mail = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']); 
	
	
	$sql = "SELECT `user_name`,`email`, `user_id`, `user_type` FROM `users` WHERE `email` = '$mail' AND `password`= '$password'";
	
	$result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
	$name = $row["user_name"];
	$userid=$row["user_id"];
    $usertype = $row["user_type"];
	$email = $row["email"];
	
	// echo $usertype;
	// echo $result;
	$count = mysqli_num_rows($result);
	

   
	
	// If result matched $myusername and $mypassword, table row must be 1 row
	  
	if($usertype=='admin') {
	  
	//    echo $name;
	//    echo $result;
	header("location:admin/adminhome.php");
	}

		 else if($usertype=='user'){
			$_SESSION['user_id']=$row['user_id'];
			$_SESSION['user_name']=$name;
			$_SESSION['email']=$email;
			header("location:user/userindex.php");
			echo ("<script LANGUAGE='JavaScript'>
			window.alert('Login successfully');
			window.location.href='user/userindex.php';
			</script>");

		 }
	    
	else {
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('You entered invalid Email or password');
			window.location.href='login.php';
			</script>");
	
 }
}
?>