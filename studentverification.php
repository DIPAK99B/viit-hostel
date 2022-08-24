<?php include 'server.php';

/*
Roll No
Mobile No
Parent name
Parent number
college
course
year
division
hod
priciple


*/


if(isset($_POST['submitform'])){
    if(!empty($_POST['rollno']) && 
    !empty($_POST['pname']) && !empty($_POST['pnumber']) && 
    !empty($_POST['college']) && !empty($_POST['course']) && 
    !empty($_POST['year']) && !empty($_POST['division']) && 
    !empty($_POST['hod']) && !empty($_POST['principle']) ) {
        $rollno=$_POST['rollno'];
        $pname=$_POST['pname'];
        $pnumber=$_POST['pnumber'];
        $college=$_POST['college'];
        $course=$_POST['course'];
        $year=$_POST['year'];
        $division=$_POST['division'];
        $hod=$_POST['hod'];
        $principle=$_POST['principle'];


        if(empty($_SESSION['username'])){
            session_start();
        }
        $username2 = $_SESSION['username'];
        $password2 = $_SESSION['password'];

        $sql = "SELECT mobile FROM login WHERE name='".$username2."' AND password='".$password2."' limit 1";
        $result = mysqli_query($conn,$sql) or die(mysqli_error());
        $row = mysqli_fetch_assoc($result);
        $mobile = $row['mobile'];






        $query1 = "SELECT loginid,name,middlename,surname FROM login WHERE mobile= '".$mobile."' limit 1";
        
        $role = mysqli_fetch_assoc(mysqli_query($conn,$query1));

        // TEST CODE HERE
        // echo "loginid : ". $role['loginid']. "</br>";
        // echo "name : ". $role['name']. "</br>";
        // echo "middlename : ". $role['middlename']. "</br>";
        // echo "surname : " . $role['surname']. "</br>";

       

        // echo $rollno. "</br>" ;
        // echo $fullname;

        //$fullname = $role['name'] ." ".  $role['middlename'] ." ".  $role['surname'];
        $fullname = $role['name'];
        $id = $role['loginid'];



        /*  Insert query for studnet table

        INSERT INTO `student` (`studentid`, `name`, `rollno`, `number`, `parentname`, `parentno`, `college`, `course`,
         `year`, `divison`, `hod`, `principle`) 
         VALUES ('221', '222', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223');


        insert Query */
        $insertquery = "INSERT INTO `student` (`studentid`, `name`, `rollno`, `number`, `parentname`, `parentno`, `college`, `course`,
        `year`, `divison`, `hod`, `principle`) 
        VALUES ('$id', '$fullname', '$rollno', '$mobile', '$pname', '$pnumber', '$college', '$course', '$year', '$division', '$hod', '$principle')";

        $run = mysqli_query($conn,$insertquery) or die(mysqli_error());
        header( 'location: studentform-result.php' );





    }
    else {
        echo '<p class="margin-left-right">I told you all fields are required now you have to select them all again </p>';
        echo '<a class="margin-left-right" href="student.php">Go back to fill the form</a>';
    }



}


?>