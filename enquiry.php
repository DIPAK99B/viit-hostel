<!-- Header -->
<?php include 'header.php';?>
<title>VIIT Enquiry</title>
<!-- other code here -->
<h4 class = "margin-left-right"> Enquiry Section </h4>

<?php 
if(empty($_SESSION['username'])){
  echo '<p class="margin-left-right">* to apply for room please login</p>';
}
?>


<form method ="POST" action="enquiry-db.php" class="row g-3" style = "width:60%; margin-left:20%; margin-right:20%;">
  <div class="col-12">
    <label for="inputAddress" class="form-label">Email ID</label>
    <input name="email" type="email" class="form-control" id="inputAddress" placeholder="Enter Email ID" required>
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Describe Your Query</label>
  <textarea name = "description" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
</div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Phone Number</label>
    <input name = "number" type="text" class="form-control" id="inputCity" required>
  </div>
  <div class="col-12">
    <button name="submit-enquiry" type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
&nbsp
<!-- Footer -->
<?php include 'footer.php';?>