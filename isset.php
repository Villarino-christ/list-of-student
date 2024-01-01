
<?php

$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$course=$_POST['cys'];
$address=$_POST['address'];




if (isset($_POST['register'])) {

    $query=mysqli_query($conn, "INSERT INTO users (fname,mname,lname,cys,address) VALUES ('$fname','$mname','$lname','$cys','$address')");
    
    if($query==true){
       echo"success";
    
    }else{
        echo "Failed to Register";
    
    }}
    else{
        echo"unable to execute";
    }
    
    
    
    
    
    
    ?>