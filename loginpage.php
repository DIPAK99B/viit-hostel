<?php include 'header.php'; ?>
<title>VIIT Login</title>

<form method="POST" action="loginverification.php" style = "margin-right:30%;margin-left:30%;">
  <!-- Email input --> &nbsp
  <h4 style="text-align:center; font-style:bold;">VIIT student Login Page</h4> &nbsp

  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Email address</label>
    <input name="email" type="email" id="form2Example1" class="form-control" />
  </div>

  <!-- Password input -->
  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example2">Password</label>
    <input name="password" type="password" id="form2Example2" class="form-control" />
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-2">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button name="login" type="submit" class="btn btn-primary btn-block mb-2">Login in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="signuppage.php">Register</a></p>
    
    <!-- <p>or sign up with:</p>
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
    </button> -->
  </div>
</form>

<?php include 'footer.php'; ?>