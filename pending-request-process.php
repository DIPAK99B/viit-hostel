<!-- 
get student id
show available room data in dropdown list 
assign room to student
update hostelregister
update student status
update room status

-->
<?php include 'header.php' ?>

<?php 

include 'server.php';

$studentid = $_GET['rn'];


$getname = "SELECT name, number FROM student WHERE studentid='".$studentid."'";
$getnameresult = mysqli_query($conn,$getname);
$getnames = mysqli_fetch_assoc($getnameresult);
$getname = $getnames['name'];
$getnumber = $getnames['number'];



?>




<div class="margin-left-right"> &nbsp
<h4 style="text-align:center"> Assign Room to Student </h4> &nbsp

<form method ="POST" action="assign-room.php" class="row g-3" style = "width:60%; margin-left:20%; margin-right:20%;">
  <div class="col-12">
    <label for="inputAddress" class="form-label">Student Name</label>
    <input value="<?php echo $getname; ?>" name="name" type="text" class="form-control" id="inputAddress" placeholder="Enter Email ID" readonly>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Student Number</label>
    <input value="<?php echo $getnumber; ?>" name="mobile" type="text" class="form-control" id="inputAddress" placeholder="Enter Email ID" readonly>
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Available Rooms</label>
  <select name="room" class="form-select" aria-label="Default select example" required>
<?php
$roomsql = "SELECT * FROM room WHERE status='Available'";
$roomresult = mysqli_query($conn,$roomsql);
while($roomrow = mysqli_fetch_assoc($roomresult)){
$getroom = $roomrow['roomid'];
echo "<option value=$getroom> $getroom </option>";
unset($getroom);
}
  ?>
</select>
</div>
<div class="col-12">
    <label  class="form-label">Starting Date </label>
    <input type="date" id="sdate" name="sdate" required> 
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Rector Name</label>
    <input name="rname" type="text" class="form-control" id="inputAddress" required>
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Rector Number</label>
    <input name="rnumber" type="text" class="form-control" id="inputAddress" required>
  </div>
  <div class="col-12">
    <button name="submit-process" type="submit" class="btn btn-primary">Submit</button> 
  </div>
</form>

</div>
&nbsp
<?php include 'footer.php' ?>