<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $message = $_POST['message'];
     $sql = "INSERT INTO usersmessage (name,email,mobile,message)
     VALUES ('$name','$email','$mobile','$message')";
     if (mysqli_query($con, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
}
?>