<html>
    <head>
        <title>hotel Management</title>
        <style>
    body{
        background-image: url("images/bg2.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
    
    </head>
    <body>
        <h1><center>LOGIN</center></h1>
        
         <tbody>
            <form action="login_conn.php" method="post">
                <table align="center" border="2" width="15%" height="10%">
                <tbody>
                <tr>
                <td>Email:</td>
                <td><input type="text" name="email" required autofocus ></td>
                </tr>
                <tr>
                <td>Password:</td>
                <td><input type="password" name="password" required></td>
                </tr>
                </tbody>
                </table>
                <br>
                <center><input type="submit" value="Login"/></center>
                </form>
                <center><a href="signup.php"> New User?</a>  <br>
                <br>
                <button><a href="index.php"> Home</a></button></center>
         </tbody>


    </body>
</html> 
