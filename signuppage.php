<!-- TODO 

Name
middle name
Surname
mobile number
age
college info - College , Branch , Div, Roll No.


todo end -->


<?php include 'header.php'; ?>
<title>VIIT Signup</title>

<form method = "POST" action = "signupverification.php" style = "margin-right:30%;margin-left:30%;">&nbsp
  <h4 style="text-align:center; font-style:bold;">VIIT student Signup Page</h4> &nbsp

<!-- Full Name Input -->
  <div class="row mb-0">
    <div class="col d-flex justify-content-center">
    <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Name</label>
    <input name = "name" type="text" id="form2Example1" class="form-control" required />
  </div> &nbsp&nbsp&nbsp
  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">middle Name</label>
    <input name = "middlename" type="text" id="form2Example1" class="form-control" required />
  </div> &nbsp&nbsp&nbsp
  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Surname</label>
    <input name = "surname" type="text" id="form2Example1" class="form-control" required />
  </div>
    </div>
</div>

  <!-- Email and Mobile Number input -->
  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Email address</label>
    <input name = "email" type="email" id="form2Example1" class="form-control" required />
  </div>
  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Mobile Number</label>
    <input name = "mobilenumber" type="text" id="form2Example1" class="form-control" required />
  </div>

  <!-- Password input -->
  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example2">Password</label>
    <input name = "password" type="password" id="form2Example2" class="form-control" required />
  </div>
  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example2">Confirm Password</label>
    <input name = "cpassword" type="password" id="form2Example2" class="form-control" required />
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
  <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Signup</button>

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

<?php include 'footer.php'; ?>