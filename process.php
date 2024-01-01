<?php
include('conn.php');

if (isset($_POST['add'])) {
   $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $course = $_POST['course'];
    $address = $_POST['address'];

    $insertData = $conn->prepare("INSERT INTO users(fname, lname, course, address) VALUES(?, ?, ?, ?)");
     $insertData->execute([$fName,$lName, $course, $address]);

    header("Location: index.php");
    exit();
    


    // Logout
    if (isset($_GET['logout'])) {
        session_start();
        unset($_SESSION['logged_in']);
        unset($_SESSION['u_id']);

        header('Location: welcome.php');

    }


    
}

//Register
if (isset($_POST['register'])) {
    $fName = $_POST['fName'];
         $lName = $_POST['lName'];
         $email = $_POST['email'];
         $pass1 = $_POST['pass1'];
         $pass2 = $_POST['pass2'];

         if ($pass1==$pass2) {
            $hash= password_hash($pass1, PASSWORD_DEFAULT);

            $insertUser = $con->prepare("INSERT INTO users(fname,lname,email,pass) VALUES(?,?,?,?)") ;
            $insertUser->execut([
                $fname,
                $lname,
                $email,
                $hash

                ]);

           header('Location:Log in.php');
           exit();
            }else{
                header('Location:register.php');
            }

            
         }




?>


