
<?php include'header.php'?>


<form method = "POST" action = "studentverification.php" style = "margin-right:10%;margin-left:10%;">&nbsp
  <h4 style="text-align:center; font-style:bold;">VIIT Student Profile</h4> &nbsp

<!-- Roll Number Input -->
  <div class="row mb-0">
  <p>* all fields are required </p>
    <div class="col d-flex justify-content-left ">
    <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Roll No</label>
    <input name = "rollno" type="text" id="form2Example1" class="form-control" required />
  </div> &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp
  <!--
  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Mobile No</label>
    <input name = "mobile" type="text" id="form2Example1" class="form-control" required />
  </div> -->
    </div>
</div>

  <!-- Parent name and number input -->
  <div class="row mb-0">
    <div class="col d-flex justify-content-center">
    <div class="form-outline mb-2 col-md-6">
    <label class="form-label" for="form2Example1">Parent Name</label>
    <input name = "pname" type="text" id="form2Example1" class="form-control" required />
  </div> &nbsp&nbsp&nbsp
  <div class="form-outline mb-2 col-md-6">
    <label class="form-label" for="form2Example1">Parent Mobile Number</label>
    <input name = "pnumber" type="text" id="form2Example1" class="form-control" required />
  </div>
    </div>
</div>


<!-- College Name and Course input -->
<div class="row mb-0">
    <div class="col d-flex justify-content-center">
    <div class="form-outline mb-2 col-md-6">
    <label class="form-label" for="form2Example1">College Name</label>
    <select name="college" class="form-select" aria-label="Default select example" required>
  <option selected></option>
  <option value="VIIT">VIIT</option>
  <option value="Engineering College">Engineering College</option>
  <option value="VP">VP</option>
  <option value="Other">Other</option>
</select>
  </div> &nbsp&nbsp&nbsp
  <div class="form-outline mb-2 col-md-6">
    <label class="form-label" for="form2Example1">Course Name</label>
    <select name="course" class="form-select" aria-label="Default select example">
  <option selected></option>
  <option value="MCA">MCA</option>
  <option value="MBA">MBA</option>
  <option value="BE">BE</option>
  <option value="B.TECH">B.TECH</option>
  <option value="Other">Other</option>
</select>
  </div>
    </div>
</div>

<!-- Year and Division input -->
<div class="row mb-0">
    <div class="col d-flex justify-content-center">
    <div class="form-outline mb-2 col-md-6">
    <label class="form-label" for="form2Example1">Year</label>
    <select name="year" class="form-select" aria-label="Default select example">
  <option selected></option>
  <option value="1st">1st</option>
  <option value="2nd">2nd</option>
  <option value="3rd">3rd</option>
  <option value="4th">4th</option>
  <option value="Other">Other</option>
</select>
  </div> &nbsp&nbsp&nbsp
  <div class="form-outline mb-2 col-md-6">
    <label class="form-label" for="form2Example1">Division</label>
    <select name="division" class="form-select" aria-label="Default select example">
  <option selected></option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
  <option value="Other">Other</option>
</select>
  </div>
    </div>
</div>

<!-- HOD and Principle input -->
<div class="row mb-0">
    <div class="col d-flex justify-content-center">
    <div class="form-outline mb-2 col-md-6">
    <label class="form-label" for="form2Example1">HOD Name</label>
    <select name="hod" class="form-select" aria-label="Default select example">
  <option selected></option>
  <option value="Dr.Mayank Sir">Dr.Mayank sir</option>
  <option value="Parakh sir">Parakh sir</option>
  <option value="Dipak">Dipak</option>
  <option value="Other">Other</option>
</select>
  </div> &nbsp&nbsp&nbsp
  <div class="form-outline mb-2 col-md-6">
    <label class="form-label" for="form2Example1">Principle Name</label>
    <select name="principle" class="form-select" aria-label="Default select example">
  <option selected></option>
  <option value="Anand Sir">Anand Sir</option>
  <option value="Dipak ">Dipak</option>
  <option value="IDK">IDK</option>
  <option value="Other">Other</option>
</select>
  </div>
    </div>
</div>







  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-2">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox 
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div> -->
    </div>
  </div>

  <!-- Submit button -->
  <div>
  <button type="submit" name="submitform" class="btn btn-primary btn-block mb-4">Submit Form</button>
  <!--<button onclick="location.href='student.php'" type="button" name="clear" class="btn btn-primary btn-block mb-4">Clear Form</button>
    --></div>

  <!-- Register buttons 
  <div class="text-center">
    <p>Not a member? <a href="#!">Register</a></p>
    <p>or sign up with:</p>
    <button onclick="window.location.href='signuppage.php'" type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div> -->
</form>


<?php include'footer.php'?>