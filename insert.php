<?php
    
$conn=mysqli_connect('localhost','root','','ajax');

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$insertData="INSERT INTO users (`id`,`firstName`,`lastName`) VALUES (NULL,'$fname','$lname')";

if(mysqli_query($conn,$insertData)) {
    echo "Record successfully inserted!!";
}
else {
    echo mysql_error();
}

?>