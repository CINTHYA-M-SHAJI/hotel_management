<?php
session_start();
?>

<html>
    <head>
        <title>viewcar</title>
    </head>
    <body align="top_right">
       <button><a href="userindex.php">HOME</a></button>  
       <!-- <button><a href="update_car.php">UPDATE</a></button>
       <button><a href="delete_car.php">DELETE</a></button> -->
    <style>
        body{
        background-image: url("../images/imc.jpg");
        background-repeat:no-repeat;
        background-size:cover;
       }
     </style>

<?php
include '../dbconnect.php';

    echo "<table border=1 width=1200px>";
    echo "<tr>";
   
    echo "<th>Type</th>";
    echo "<th>Room No</th>";
    echo "<th>Number of Bed</th>";
    echo "<th>IMAGE</th>";
    echo "<th>UPDATE</th>";
    echo "</tr>";
    $sql="SELECT * FROM  `room` WHERE `status`='available'";
   
    
    $result = mysqli_query($conn,$sql);
    // echo $sql;
    // echo $conn;
    // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // mysqli_query($conn, "SET @a:='this will not work'");

    
    // echo $result;
    // $dum =var_dump($result);
    // echo $dum;
    if (mysqli_num_rows($result) > 0) {
  
  
    while($row = mysqli_fetch_array($result)) {
        echo "<tr align=center>";
   
        echo "<td>" .$row["room_type"]. "</td>";
        echo "<td>" .$row["room_no"]. "</td>";
        echo "<td>" .$row["no_beds"]. "</td>";
        
       
        $pathx= "../images/";

        $file=$row["images"];
        echo "<td>";
        echo '<img src="'.$pathx.$file.'" height=100 width=100>';
        echo "</td>";

        echo "<td><a href=book.php?room_id=".$row["room_id"].">BOOK</a></td>";
        
        echo "</tr>";

   
    }
echo "</table>";
    }
    else{
    echo "No result found";
    }

    ?>
    </body>
</html>