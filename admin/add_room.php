<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body{
  background-image: url("images/download copy.jpeg");
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
<title>ADD Room</title>
</head>

<body>
<form action="add_room_conn.php" method="post" >
  <br>
<h1><center>ADD ROOM</center></h1>
<table align="center" border="0">

<tr><td>Room Number</td>
<td><input type="number" name="room_no"/></td></tr>
<tr><td><label for="cars">Category</label>      
                              <td><select name="room_type" id="cars">
                                 <option value="null">----</option>   
                                <option value="Deluxe room">Deluxe Room</option>
                                <option value="single room">Single Room</option>
                                <option value="double room">Double Room</option>
                              </select>  </td>  </td>  
                    </tr>
<tr><td>Number of Beds</td>
<td><input type="number" name="no_beds"/></td></tr>
<tr><td>Image</td>
<td><input type="file" name="images"required  /></td></tr>
</table>
<br>
<center><input type="submit" class="btn btn-warning" value="Add Room" /></center>
</form>
</body>
</html>