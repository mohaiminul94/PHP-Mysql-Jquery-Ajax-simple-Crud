<?php
    
$conn=mysqli_connect('localhost','root','','ajax');

$id=$_POST['id'];

$deleteData="DELETE FROM `users` WHERE id='$id'";

if(mysqli_query($conn,$deleteData)) {
    echo "Record successfully deleted!!";
}
else {
    echo mysql_error();
}

?>