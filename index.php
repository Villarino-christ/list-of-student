<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Student</title>
</head>

    
<body>
<center>
        <h1>List of Student</h1>
    </center>
    <br>


<a href="HOME.php">LOG OUT</a>

    <?php
    if (isset($_GET['update'])) {
        echo "
<!--//Updating data-->
     $id=$_GET[id];
     $get_id=$conn->$prepare('SELECT * FROM users WHERE id:id');

     $get_user->setFetchMode(PDO:: FETCH-ASSOC);

     $get_id->execute(['id' -> $id]);
     while ($data=$get_id->fetch()) {

       $id =$data[id];
       $fname =$data[fname];
       $mname=$data[mname];
       $lname=$data[lname];
       $course=$data[course];
       $address =$data[address];
       
       


     
 
        <fieldset style='background-color: lightblue;' >
            <legend> <b>Update Data/Users</b></legend>
            <form method'POST' action'process.ph'>
                <label><b>First Name: </b> </label><input type='tex' name='fName' value='$firstname'> <br> <br>
                <label> <b>Middle Name: </b></label><input type= 'text' name='lName value='$middlename'> <br> <br>
                <label><b>Last Name: </b> </label><input type='tex' name='lName' value='$lastname'> <br> <br>
                <label> <b>Course/Yr/Section: </b> </label><input type='text' name='course value='$course'> <br> <br>
                <label> <b>Address: </b> </label><input type='text' name='address value='$address'> <br> <br>
                <button name='add' style='background-color: lightgrey;'> <b> UPDATE</b> </button>
    
            </form>
        </fieldset>
    ";
    }else{

       // <!--Inserting data -->
       echo " <fieldset style='background-color: lightblue;'>
       <legend> <b>Input Data/Users</b></legend>
       <form method='POST' action='process.php'>
           <label><b>First Name: </b> </label><input type='text' name='fName'> <br> <br>
           <label> <b>Middle Name: </b></label><input type='text' name='mName'> <br> <br>
           <label><b>Last Name: </b> </label><input type='text'name='lName'> <br> <br>
           <label> <b>Course/Yr/Section: </b> </label><input type='text' name='course'> <br> <br>
           <label> <b>Address: </b> </label><input type='text' name='address'> <br> <br>
           <button name='add' style='background-color: lightgrey;'> <b> SUBMIT</b> </button>

       </form>
   </fieldset>
   ";
       
    }
    ?>
   
    
    <br>

    <hr>
    <fieldset style="background-color: lightblue;">
        <legend><b>Read Function</b></legend>
        <table border="1">
            <thead>
                <th>First Name</th>
                <th> Middle Name</th>
                <th>Last Name</th>
                <th>Course/Yr/Section</th>
                <th> Address </th>
                <th>Action</th>
            </thead>



    
    <tbody>
        <?php
        $getData = $conn->prepare("SELECT * FROM users");
        $getData->execute();

        foreach ($getData as $data) { ?>
            <tr align="center">
                <td> <?= $data['fname'] ?> </td>
                <td> <?= $data['lname'] ?> </td>
                <td> <?= $data['course'] ?> </td>
                <td> <?= $data['address'] ?> </td>
                <td> <a href="?update&&id<?= $data['id'] ?>">Update</a> </td>
            </tr>
        <?php } ?>
    </tbody>

    </table>
    </fieldset>
</body>

</html>