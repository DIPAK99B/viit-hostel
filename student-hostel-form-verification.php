<?php include'server.php';





if(isset($_POST['submithostelform'])){
    if(!empty($_POST['syear']) && !empty($_POST['eyear']) &&  !empty($_POST['date']) && !empty($_POST['month']) &&
    !empty($_POST['year']) &&  !empty($_POST['room']) &&  !empty($_POST['gender']) &&  !empty($_POST['marital']) &&
    !empty($_POST['course']) &&  !empty($_POST['address'])  ) {
        $syear = $_POST['syear'];
        $eyear = $_POST['eyear'];
        $date = $_POST['date'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $gender = $_POST['gender'];
        $marital = $_POST['marital'];
        $course = $_POST['course'];
        $room = $_POST['room'];
        $address = $_POST['address'];

        if(!empty($_SESSION['username'])){
            session_start();
        }

        session_start();

        $username = $_SESSION['username'];
        $password = $_SESSION['password'];

        $sql = "SELECT loginid FROM login WHERE name='".$username."' AND password='".$password."' limit 1";
        $result = mysqli_query($conn,$sql) or die(mysqli_error());
        $row = mysqli_fetch_assoc($result);
        $loginid = $row['loginid'];

        $sql2 = "SELECT rollno FROM student WHERE studentid ='".$loginid."' limit 1";
        $result2 = mysqli_query($conn,$sql2) or die(mysqli_error());
        $row2 = mysqli_fetch_assoc($result2);
        $rollno = $row2['rollno'];



        $insertquery = "INSERT INTO `hostelform` (`formid`, `id`, `sid`, `syear`, `eyear`, `date`, `month`, 
        `year`, `gender`, `marital`, `course`, `room`, `address`) 
        VALUES (NULL, '$loginid', '$rollno', '$syear', '$eyear', '$date', '$month', '$year', '$gender', '$marital', '$course', '$room', '$address')";


        $run = mysqli_query($conn,$insertquery) or die(mysqli_error());
        header( 'location: studentform-result.php' );


    }
    else {
        echo "ALL Filds are required";
    }


}
else {
    
}




?>