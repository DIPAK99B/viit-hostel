<?php include 'header.php' ?>
<?php include 'server.php' ?>


<?php 

//this will return the count of enquiries
$sqlcount = "SELECT COUNT(*) FROM enquiry;";
$result = mysqli_query($conn,$sqlcount);
$row = mysqli_fetch_assoc($result);
$enquirycount = implode($row);



//this code will return count of forms - requests
$sqlform = "SELECT COUNT(*) FROM hostelform WHERE ISNULL(status)";
$formresult = mysqli_query($conn,$sqlform);
$row2 = mysqli_fetch_assoc($formresult);
$requestcount = implode($row2);

?>

&nbsp &nbsp
<div style="margin-left:10%;margin-right:10%">
<h1 style="text-align:center"> ADMIN PANEL </h1>
&nbsp
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pending Requests : <?php echo $requestcount;?></h5>
        <p class="card-text">List of all pending requests for Room allotments</p>
        <a href="pending-request.php" class="btn btn-primary">Open</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Enquiries : <?php echo $enquirycount;?></h5>
        <p class="card-text">List of all pending Enquiries to answer</p>
        <a href="pending-enquiry.php" class="btn btn-primary">Open</a>
      </div>
    </div>
  </div>
</div>
&nbsp &nbsp

&nbsp &nbsp
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Room Mangement</h5>
        <p class="card-text">Assign room to students and maitain rooms records</p>
        <a href="manage-room.php" class="btn btn-primary">Open</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Hostel Rooms</h5>
        <p class="card-text">Database of students info and hostel</p>
        <a href="updaterooms.php" class="btn btn-primary">Open</a>
      </div>
    </div>
  </div>
</div>
</div>
&nbsp &nbsp

<?php include 'footer.php' ?>