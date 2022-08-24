<?php include 'header.php'?>
<?php include 'server.php'?>

<!-- PHP code to connect with database and run query for tables-->
<?php 

$sql = "SELECT * FROM enquiry";
$result = mysqli_query($conn,$sql);





?>

<div class="margin-left-right">
&nbsp
<h4 style ="text-align:center"> Pending Enquiries </h4>
&nbsp


<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Email</th>
      <th scope="col">description</th>
      <th scope="col">Mobile</th>
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
      <td>" .$rows['email']."</td>
      <td>" .$rows['description']."</td>
      <td>" .$rows['no']."</td>
      <td><a href='pending-enquiry-delete.php?rn=$rows[id]' >Delete It</a></td>
    </tr>
    "; 
} ?>

  </tbody>
</table>

</div>

<?php include 'footer.php'?>