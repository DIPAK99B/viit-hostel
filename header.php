<!doctype html>
<html lang="en">
  <head>
    <style>
      .bgred {
        background:red;
      }

      .navbar {
        color:white;
      }

      .navbar a {
        color:white;
      }

      #linkcolor{
       color:white; 
      }

      .custom-toggler.navbar-toggler {
            border-color: white;
        }

      .icon-custom-color {
        background:white;
      }


      </style>
    <!-- CSS FILE HERE -->
    <link rel="stylesheet" href="design.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--
       <title>VIIT SITE</title> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <!-- <nav class="navbar navbar-expand-lg bg-light"> (original nav bar)-->
  <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">VIIT</a>
    <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon icon-custom-color"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a id="linkcolor" class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a id="linkcolor" class="nav-link active" aria-current="page" href="hostel.php">Hostel</a>
        </li>
        <li class="nav-item">
          <a id="linkcolor" class="nav-link active" aria-current="page" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a id="linkcolor" class="nav-link active" aria-current="page" href="enquiry.php">Enquiry</a>
        </li>
        <!-- PHP logic to display student page when student logins and admin page when admin logins
          if user = student display link with student 
          elseif user = admin display link with student and admin or only admin
          else display nothing
      
      
      -->

      <?php
      session_start();
      if(isset($_SESSION['username'])){

        if($_SESSION['role']=="student"){
          echo '<li class="nav-item">';
          echo '  <a id="linkcolor" class="nav-link active" aria-current="page" href="student.php">STUDENT</a> ';
          echo '</li>';
        }
        elseif($_SESSION['role']=="admin"){
          echo '<li class="nav-item">';
          echo '  <a id="linkcolor" class="nav-link active" aria-current="page" href="admin.php">ADMIN</a> ';
          echo '</li>';
        }
      }
      
      ?>





        <!--
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      </ul>
      <!--
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    -->
      <!-- <button class="btn btn-outline-success">Login</button> -->

      <!-- PHP logic to check if user is already logged in or not and show login option or logout option -->
      <?php
      if(isset($_SESSION['username'])){
        echo "<p>Welcome : ".$_SESSION['username'];
        echo "<span > &nbsp&nbsp&nbsp&nbsp </span>";
        echo "<button onclick=\"window.location.href='logout.php'\" style = \"border:none; border-radius: 8%; \">Logout</button>";
      }
      else {
        echo "<button onclick=\"window.location.href='loginpage.php'\" style = \"border:none; border-radius: 8%; \">Login</button>";
        echo "<span > &nbsp&nbsp&nbsp&nbsp </span>";
        # <!-- <button class="btn btn-outline-success">Sign Up</button> -->
        echo "<button onclick=\"window.location.href='signuppage.php'\" style = \"border:none; border-radius: 8%; \">Sign Up</button>";
      }
      
      ?>
    </div>
  </div>
</nav>
    <!-- <h1>Hello, world!</h1> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  