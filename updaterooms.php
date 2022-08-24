<?php include'header.php' ?>

<form method = "POST" action = "updateroomsphp.php" style = "margin-right:20%;margin-left:20%;">&nbsp
  <h4 style="text-align:center; font-style:bold;">VIIT Hostel Room Mangement</h4> &nbsp



  <!-- Search bar to search room  
  <div class="row mb-0">
    <div class="col d-flex justify-content-left">
    <div class="form-outline mb-2">
    <input name = "roomid" type="text" id="form2Example1" class="form-control"/>
  </div> &nbsp&nbsp&nbsp
  <div class="form-outline mb-2">
    <button name="searchbutton"  class="btn btn-primary btn-block mb-4" > Search </button>
  </div> &nbsp&nbsp&nbsp
    </div>
</div>
-->
<h5> ADD ROOM </h5>
<!-- Hostel Name -->
<div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Hostel Name</label>
    <input name="hostelname" type="text" id="form2Example1" class="form-control" required/>
  </div>



<!-- Wing , Floor , Roomno -->
<div class="row mb-0">
    <div class="col d-flex justify-content-left">
    <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Wing</label>
    <input name = "wing" type="text" id="form2Example1" class="form-control" required />
  </div> &nbsp&nbsp&nbsp
  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Floor No.</label>
    <input name = "floor" type="text" id="form2Example1" class="form-control" required />
  </div> &nbsp&nbsp&nbsp
  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Room No.</label>
    <input name = "roomno" type="text" id="form2Example1" class="form-control" required />
  </div> &nbsp&nbsp&nbsp
    </div>
</div>

<!-- room type , status , price -->
<div class="row mb-0">
    <div class="col d-flex justify-content-left">
    <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Room Type</label>
  <select name="type" class="form-select" aria-label="Default select example" required>
  <option value="Single" selected>Single</option>
  <option value="Double">Double</option>
  <option value="Tripple">Tripple</option>
</select>
</div> &nbsp&nbsp&nbsp
    <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Status</label>
  <select name="status" class="form-select" aria-label="Default select example" required>
  <option selected>Available</option>
  <option value="Female">Assigned</option>
</select>
</div> &nbsp&nbsp&nbsp
  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Price</label>
    <input name = "price" type="text" id="form2Example1" class="form-control" required />
</div> &nbsp&nbsp&nbsp
    </div>
</div>
<div class="mt-2">
  <!-- Submit button -->
  <button type="submit" name="addroom" class="btn btn-primary btn-block mb-4">Add Room</button>

  <!--
  <button type="submit" name="deleteroom" class="btn btn-primary btn-block mb-4">Delete Room</button>
-->
</div>


</form>

<?php include'footer.php' ?>