<?php

// $conn=mysqli_connect('localhost','root','','ajax');


// $fname=$_POST['fname'];
// $lname=$_POST['lname'];
// $insertData="INSERT INTO users (`usersId`,`firstName`,`lastName`) VALUES (NULL,'$fname','$lname')";

// mysqli_query($conn,$insertData);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Insert Data with AJAX</title>
		<meta charset="utf-8">
</head>
<body>

<?php include 'nav.php'; ?> 

<div style="margin:50px;">
	<form>
		<label>First Name</label><br>
		<input type="text" name="fname" id="fname"><br><br>
		<label>Last Name</label><br>
		<input type="text" name="lname" id="lname"><br><br>
		<input type="submit" name="submit" id="submit" value="Insert Data"><br><br>
		<h2 id="notification"></h2>
	</form>
</div>

	<script type="text/javascript" src="jquery.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#submit').click(function(event) {
				event.preventDefault();
				$.ajax({
					url: "insert.php",
					method: "post",
					data: $('form').serialize(),
					dataType: "text",
					success: function(notify) {
						$('#notification').text(notify);
					}
				});
			});
		});
	</script>


</body>
</html>