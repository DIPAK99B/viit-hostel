<?php include'header.php' ?>

<!-- 
OPT profile pic

application no 
acadmic year
full name
date of birth - dd mm year
age year
gender
single/married
course - year of study
OPT date of admission
contact no. candidate
emailid
name of parent - no , mail , 
address - permanent
OPT whether the cadidate had stayed in any hostel befgore - yes/no
OPT whether the candidate has any medical histpory of ailments - yes/no

OPT Declaration by the student

OPT declaration by the parent

OPTIONAL BELOW
office
name of the program
room no
roomamtes name
class
admitted to hostel on
amount paid
receipt no
place date

-->
<form method = "POST" action = "student-hostel-form-verification.php" style = "margin-right:20%;margin-left:20%;">&nbsp
  <h4 style="text-align:center; font-style:bold;">VIIT Hostel Admission Form</h4> &nbsp


  <!-- Acadmic year start, end and Roll Number Input -->
  <div class="row mb-0">
    <div class="col d-flex justify-content-left">
    <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Acadmic year start</label>
    <input name = "syear" type="number" id="form2Example1" class="form-control" required />
  </div> &nbsp&nbsp&nbsp
  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Acadmic year end</label>
    <input name = "eyear" type="number" id="form2Example1" class="form-control" required />
  </div> &nbsp&nbsp&nbsp
    </div>
</div>


<!-- AGE in DD MM YEAR and AGE -->
<div class="row mb-0">
    <div class="col d-flex justify-content-left">
    <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Birth Date</label>
    <input name = "date" type="number" id="form2Example1" class="form-control" required />
  </div> &nbsp&nbsp&nbsp
  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Birth Month</label>
    <input name = "month" type="number" id="form2Example1" class="form-control" required />
  </div> &nbsp&nbsp&nbsp
  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Birth Year</label>
    <input name = "year" type="number" id="form2Example1" class="form-control" required />
  </div> &nbsp&nbsp&nbsp
    </div>
</div>

<!-- Gender and status -->
<div class="row mb-0">
    <div class="col d-flex justify-content-left">
    <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Gender</label>
  <select name="gender" class="form-select" aria-label="Default select example" required>
  <option selected>male</option>
  <option value="Female">Female</option>
</select>
</div> &nbsp&nbsp&nbsp
  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Marital Status</label>
  <select name="marital" class="form-select" aria-label="Default select example" required>
  <option selected>Single</option>
  <option value="Female">Married</option>
</select>
</div> &nbsp&nbsp&nbsp
<div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Course Duration</label>
  <select name="course" class="form-select" aria-label="Default select example" required>
  <option selected>1 Year</option>
  <option value="Female">2 Years</option>
  <option value="Female">3 Years</option>
  <option value="Female">4 Years</option>
</select>
</div> &nbsp&nbsp&nbsp
<div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Room Type</label>
  <select name="room" class="form-select" aria-label="Default select example" required>
  <option selected>Single</option>
  <option value="Female">Double</option>
  <option value="Female">Tripple</option>
</select>
</div> &nbsp&nbsp&nbsp
    </div>
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Permanent Address</label>
  <textarea name = "address" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
</div>

<div class="form-check">
        <label class="form-check-label" for="form2Example31">By submiting this form you accept T&C</label>
        <a href="termsandcondition.php"class = "margin-left-right" > View T&C </a>
      </div>


  <!-- Submit button -->
  <button type="submit" name="submithostelform" class="btn btn-primary btn-block mb-4">Submit Form</button>

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

<?php include'footer.php' ?>