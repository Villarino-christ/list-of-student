<?php
include('header.php');

if(isset($_SESSION['logged_in']))
header("Location: welcome.php");

if (isset($_POST['login'])) {
   
    $email = $_POST['email'];
    $password = $_POST['password1'];
    
   


    $insertData = $conn->prepare("INSERT INTO users(email, password) VALUES(?, ?)");
     $insertData->execute([$email, $password]);

     $check = $conn->prepare("SELECT * FROM users WHERE email = ?");
     $check->execute([$email]);

     foreach($check as $value){
        if($value['user_email'] == $email && password_verify($pass, $value['user_pass'])){
            $_SESSION['logged_in'] = true;
            $_SESSION['u_id'] = $value['user_id'];

            header("location: welcome.php");
        }else{
            $msg = "Password incorrect!";
            header("Location: login.php?msg=$msg");
        }
    }

    header("Location: welcome.php");
    exit();


    
}
?>

<fieldset  style="background-color: lightblue;">

<legend> <b>LOG IN/Users</b></legend>
<form method="POST" action="welcome.php">
    
    <label><b>Email: </b> </label>
    <input type="text" name="email"> <br> <br>
    <label> <b>Password: </b> </label><input type="text" name="password1"> <br> <br>
    
    <button name="add" style="background-color: lightgrey;"> <b> SIGN IN</b> </button>

</form>
</fieldset>
    
