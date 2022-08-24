<!-- 
    Take data from SignupPage and then
    verify and update it to the database
 -->

<?php include "server.php"?>

<?php 

if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['middlename']) && 
    !empty($_POST['surname']) && !empty($_POST['email']) && 
    !empty($_POST['mobilenumber']) && !empty($_POST['password']) && 
    !empty($_POST['cpassword']) ) {

        if($_POST['password'] == $_POST['cpassword']) {
            $name = $_POST['name'];
            $middlename = $_POST['middlename'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $mobilenumber = $_POST['mobilenumber'];
            $password = $_POST['password'];

        
            //$query = "INSERT INTO login(loginid, name, middlename, surname, email, mobile, password) 
            //values (,$email, $description , $no)";
        
            $query2 = "INSERT INTO `login` (`loginid`, `name`, `middlename`, `surname`, `email`, `mobile`, `password`,`role`) 
            VALUES (NULL, '$name', '$middlename','$surname','$email','$mobilenumber','$password',\"student\") ";
        
            $run = mysqli_query($conn,$query2) or die(mysqli_error());
            header( 'location: loginpage.php' );

        }
        else {
            echo '<script type="text/javascript">';
            echo ' alert("Password does not match")';
            echo '</script>';
        }
    }
    else {
        echo '<script type="text/javascript">';
        echo ' alert("all fields are required")'; 
        echo '</script>';
    }
}
?>



