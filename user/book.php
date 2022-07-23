<?php
session_start(); 
include 'dbconnect.php';

if(!$conn)
{
    die("Error: Failed to connect to database!");
}
$room_id=$_GET['room_id'];
$_SESSION['room_id']=$room_id; 

$query=mysqli_query($conn,"SELECT * FROM `room` WHERE room_id='$room_id'");;



$userid=$_SESSION['user_id'];


// echo $room_no;
echo "<table align=center>";

while($row= mysqli_fetch_array($query)){

    echo "<tr><th>Room Number</th><td style='border: solid 1px black;'>".$row['room_no']."</td></tr>";
   

    echo "<tr><th>Room Type</th><td style='border: solid 1px black;'>".$row['room_type']."</td></tr>";
   
    echo "<tr><th>Number of beds</th><td style='border: solid 1px black;'>".$row['no_beds'] ."</td></tr>";
 
    echo "<tr><th>IMAGE</th><td>";


            $pathx = "../images/";
            $file = $row["images"];
            echo "<tdstyle='border: solid 1px black;>";
            echo '<img src="'.$pathx.$file.'" height=100 width=100>';
            echo "</td></tr>";

            } 
                   
echo "</table>";

?>

<!DOCTYPE html>
<html>
<head>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
 <title>BOOKING</title>
</head>
 <body>
<div>
<script type="text/javascript">
   $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#f_date').attr('min', minDate);
    $('#t_date').attr('min', minDate);
});

</script> 
     <form action="book_conn.php" align='center'method="post">  

        <input type="hidden"  name="room_no" value="<?php echo $room_no;?>">
        <input type="hidden" readonly name="room_type" value="<?php echo $room_type;?>"><br>
        <input type="hidden" readonly name="no_beds" value="<?php echo $no_beds;?>">
        
        Booking Date: <input type="date" id="f_date"  name="f_date"  required > <br><br>
        
        <input type="submit" value="BOOK">
         <br><br>
         <button><a href="userindex.php">HOME</a></button>
    </form>
   
   
     
</div> 
   
</body>
</html>