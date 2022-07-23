<html>
    <head>
        <title>SignUp</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
    body{
        background-image: url("images/bg1.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
    
    </head>
    <body>
        <h1><center>SignUp</center></h1>
        <div class="container">
    <p><center>Please fill in this form to create an account.</center></p>
    <hr>
         <tbody>
            <form action="signup_conn.php" method="POST">
                <table align="center" border="2" width="15%" height="10%">
                <tbody>
                <tr>
                <td>Name:</td>
                <td><input type="text" name="name" required autofocus ></td>
                </tr>
                <tr>
                <td>Email:</td>
                <td><input type="text" name="email" required autofocus ></td>
                </tr>
                <tr>
                <td>Address:</td>
                <td><input type="text" name="address" required autofocus ></td>
                </tr>
                <tr><td>Phone Number:</td>
                <td><input type="text" name="mobile" pattern="[0-9]+" maxlength="10" minlength="10" required></td></tr>
                <tr>
                <td>Password:</td>
                <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="cpassword" required autofocus ></td>
                </tr>
                </tbody>
                </table>
                <br>
                <center><input type="submit" class="btn btn-success" value="Sign Up"/></center>

                <hr>
             </div>
             <div class="container signin">
    <p><center>Already have an account? <a href="login.php">Login in</a>.</center></p>
  </div>
                </form>
         </tbody>


    </body>
</html> 



