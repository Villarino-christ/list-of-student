<?php 
if(isset($_SESSION['login'])){
    header("location: log in.php");
    ob_end_flush();
}

?>




<fieldset  style="background-color: lightblue;">

        <legend> <b>REGISTER/Users</b></legend>
        <form method="POST" action="log in.php">
            <label><b>First Name: </b> </label><input type="text" name="fName"> <br> <br>
            <label> <b>Last Name: </b></label><input type="text" name="lName"> <br> <br>
            <label><b>Email: </b> </label><input type="text" name="email"> <br> <br>
            <label> <b>Password: </b> </label><input type="password" name="password1"> <br> <br>
            <label> <b>Confirm Password: </b> </label><input type="password" name="password2"> <br> <br>
            <button name="add" style="background-color: lightgrey;"> <b> SIGN UP</b> </button>

        </form>
    </fieldset>




<?php 
$conn=mysqli_connect("localhost","root","","list_of_student");







?>





