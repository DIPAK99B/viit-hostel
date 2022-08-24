<?php include 'header.php'?>
<?php include 'server.php'?>

<!-- PHP code to connect with database and run query for tables-->
<?php 

$sql = "SELECT * FROM enquiry";
$result = mysqli_query($conn,$sql);

//fetching data from studetn and hostelfrom
// working $sql2 = "SELECT name , number , college , room FROM student S , hostelform H WHERE studentid = 56 and S.studentid = H.id;";
// working $sql2 = "SELECT name , number , college , room FROM student S , hostelform H WHERE S.studentid = H.id;";
$sql2 = "SELECT * FROM student S , hostelform H WHERE ISNULL(H.status) AND S.studentid = H.id;";


$result2 = mysqli_query($conn,$sql2);


//available room data
$availablerooms = "SELECT roomid FROM room WHERE status='available'";
$roomresult = mysqli_query($conn,$availablerooms);


?>

<div class="margin-left-right">
&nbsp
<h4 style ="text-align:center"> Pending Requests </h4>
&nbsp
<?php
//PHP code to retrive data from room of avaialabe rooms according  to room type
$sqls = "SELECT count(*) FROM room WHERE type='Single' AND status='Available'";
$resultsrm = mysqli_query($conn,$sqls);
$src = mysqli_fetch_assoc($resultsrm);
$singleroomcount = implode($src);

$sqls2 = "SELECT count(*) FROM room WHERE type='Double' AND status='Available'";
$resultsrm2 = mysqli_query($conn,$sqls2);
$src2 = mysqli_fetch_assoc($resultsrm2);
$doubleroomcount = implode($src2);

$sqls3 = "SELECT count(*) FROM room WHERE type='Tripple' AND status='Available'";
$resultsrm3 = mysqli_query($conn,$sqls3);
$src3 = mysqli_fetch_assoc($resultsrm3);
$trippleroomcount = implode($src3);

?>
<h4> Available Room : Single : <?php echo $singleroomcount ?> , Double : <?php echo $doubleroomcount ?> , Tripple : <?php echo $trippleroomcount ?> </h4> &nbsp


<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile No.</th>
      <th scope="col">College</th>
      <th scope="col">Room Type</th>
      <th scope="col">Assing Room</th>
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
<td><a href='pending-request-process.php?rn=$rows[id]' >Select</a></td>
    </tr>
    "; 
} ?>
  </tbody>
</table>

</div>

<?php include 'footer.php'?>