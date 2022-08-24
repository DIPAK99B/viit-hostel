<?php include 'header.php'?>
<?php include 'server.php'?>

<!-- PHP code to connect with database and run query for tables-->
<?php 

$sql = "SELECT * FROM enquiry";
$result = mysqli_query($conn,$sql);

//fetching data from studetn and hostelfrom
// working $sql2 = "SELECT name , number , college , room FROM student S , hostelform H WHERE studentid = 56 and S.studentid = H.id;";
// working $sql2 = "SELECT name , number , college , room FROM student S , hostelform H WHERE S.studentid = H.id;";
$sql2 = "SELECT * FROM student S , hostelform H WHERE S.studentid = H.id;";


$result2 = mysqli_query($conn,$sql2);


//available room data
$availablerooms = "SELECT roomid FROM room WHERE status='available' AND type='Single'";
$roomresult = mysqli_query($conn,$availablerooms);


?>

<div class="margin-left-right">
&nbsp
<h4 style ="text-align:center"> Pending Requests </h4>
&nbsp


<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile No.</th>
      <th scope="col">College</th>
      <th scope="col">Room Type</th>
      <th scope="col">Assign Room</th>
      <th scope="col">Submit</th>
    </tr>
  </thead>

  <tbody>
  <?php 
    $no2 = 0;
    while($rows=mysqli_fetch_assoc($result2)){
        $no2 = $no2 + 1;
echo "
    <tr>
      <td>" .$no2."</td>
      <td>" .$rows['name']."</td>
      <td>" .$rows['number']."</td>
      <td>" .$rows['college']."</td>
      <td>" .$rows['room']."</td>
      <td> <select style=\"width:100%\">";
      while($rows2=mysqli_fetch_assoc($roomresult)){ 
        echo "
      <option>" .$rows2['roomid']. " </option> ";
  } unset($rows2); 
  echo "
</select> </td>
<td><a href='pending-enquiry-delete.php?rn=$rows[id]' >Submit</a></td>
    </tr>
    "; 
} ?>
  </tbody>
</table>

</div>

<?php include 'footer.php'?>