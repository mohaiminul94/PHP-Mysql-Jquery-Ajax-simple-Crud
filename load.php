<?php

$conn=mysqli_connect('localhost','root','','ajax');

$getData="SELECT * FROM `users`";

echo "<table cellpadding=5 cellspacing=5><tr><th>Id</th><th>First Name</th><th>Last Name</th><th>Actions</th></tr>";

if( $data= mysqli_query($conn,$getData) ) {
    while($row=mysqli_fetch_assoc($data)) {
            echo "<tr><td>$row[id]</td><td>$row[firstName]</td><td>$row[lastName]</td>
                <td><a href='edit.php?id=$row[id]&firstName=$row[firstName]&lastName=$row[lastName]'>
                Update</a></td>
                <td><a href='delete.php?id=$row[id]&firstName=$row[firstName]&lastName=$row[lastName]'>
                Delete</a></td>
                </tr>";
        }
    }
else {
    echo mysql_error();
}

?>