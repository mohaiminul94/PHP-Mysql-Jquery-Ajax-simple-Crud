<?php
    
$conn=mysqli_connect('localhost','root','','ajax');

$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];

$updateData="UPDATE `users` SET firstName= '$fname',lastName='$lname' WHERE id='$id'";

if(mysqli_query($conn,$updateData)) {
    echo "Record successfully updated!!";
}
else {
    echo mysql_error();
}

?>