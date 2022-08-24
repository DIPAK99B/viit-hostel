<?php include 'header.php'?>
<?php include 'server.php'?>

<!-- PHP code to connect with database and run query for tables-->
<?php 

/*
name - student
number - student
room number - room

*/
$sql = "SELECT h.studentid , name , number , roomid FROM hostelregister h, student s WHERE h.studentid=s.studentid";
$result = mysqli_query($conn,$sql);





?>

<div class="margin-left-right">
&nbsp
<h4 style ="text-align:center"> Room Register </h4>
&nbsp


<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile No.</th>
      <th scope="col">Room Number</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $no2 = 0;
    while($rows=mysqli_fetch_assoc($result)){
        $no2 = $no2 + 1;
echo "
    <tr>
      <td>" .$no2."</td>
      <td>" .$rows['name']."</td>
      <td>" .$rows['number']."</td>
      <td>" .$rows['roomid']."</td>
      <td><a href='viewstudentprofile.php?rn=$rows[studentid]' >View Profile</a></td>
    </tr>
    "; 
} ?>

  </tbody>
</table>

</div>

<?php include 'footer.php'?>