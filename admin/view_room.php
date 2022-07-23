<?php
session_start();
?>

<html>
    <head>
        <title>viewroom</title>
    </head>
    <body align="top_right">
       <a href="adminhome.php"><button>HOME</button></a>
       <a href="add_room.php"><button>ADD ROOM</button></a> 
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
require_once '../dbconnect.php';

    echo "<table border=1 width=1200px>";
    echo "<tr>";
   
    echo "<th>Type</th>";
    echo "<th>Room No</th>";
    echo "<th>Number of Bed</th>";
    echo "<th>IMAGE</th>";
    echo "<th>Status</th>";

    echo "</tr>";
    $sql="SELECT * FROM  `room` ";
   
    
    $result = mysqli_query($conn,$sql);
    
   
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
        echo "<td>" .$row["status"]. "</td>";

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