<?php include "header.php" ?>

<!-- Retriving data from database and showing on page -->
<?php  
// if(empty($_SESSION['username'])){
// session_start();
// }

// if(isset($_SESSION['username'])){
// echo "Welcome : " .$_SESSION['username'];
// echo "</br>";
// echo "Your Password is : " .$_SESSION['password'];
// }
?>

&nbsp &nbsp
<div style="margin-left:10%;margin-right:10%">
<h1 style="text-align:center"> STUDENT PANEL </h1>
&nbsp
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Edit Profile</h5>
        <p class="card-text">Student Information</p>
        <a href="student-profile.php" class="btn btn-primary">Edit Profile</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Fill up hostel form</h5>
        <p class="card-text">Application Status : NOT APPLIED</p>
        <a href="student-hostel-form.php" class="btn btn-primary">FIll Form</a>
      </div>
    </div>
  </div>
</div>
&nbsp &nbsp
</div>


<?php include "footer.php" ?>