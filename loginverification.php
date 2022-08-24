<?php 

if(isset($_POST['login'])){
$email = $_POST['email'];
$password = $_POST['password'];


# login connection with database
include "server.php";

$sql = "SELECT * FROM login WHERE email='".$email."' AND password ='".$password."' limit 1";

$result = mysqli_query($conn,$sql) or die(mysqli_error()); 

$getrole = "SELECT role FROM login WHERE email='".$email."' AND password ='".$password."' limit 1";

$result2 = mysqli_query($conn,$getrole) or die(mysqli_error());

$role = mysqli_fetch_assoc($result2);

// changed session username from $email to $name with following sql query 
$sql2 = "SELECT * FROM login WHERE email='".$email."' AND password ='".$password."' limit 1";
$getnameresult = mysqli_query($conn,$sql2) or die(mysqli_error());
$getname = mysqli_fetch_assoc($getnameresult);
$name = $getname['name'];

if(mysqli_num_rows($result)==1){
    session_start();


    $_SESSION['username'] = $name;
    $_SESSION['password'] = $password;
    $_SESSION['role'] = $role['role'];

    header("location: index.php");
}
else {
    echo "Password Don't match";
    echo "<br>";
    echo '<a href="loginpage.php">Try again</a>';
}















# Below without database working code

// if($email=="dipak@gmail.com" && $password == "password"){
//     session_start();


//     $_SESSION['username'] = "Dipak";
//     $_SESSION['password'] = "password";
//     $_SESSION['role'] = "student";

//     header("location: index.php");

// }
// else {
//     echo "Password Don't match";
// }



}
else {
    echo "loginverification pe error aagaya ";
}



?>