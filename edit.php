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
		<label>Id</label><br>
		<input type="text" name="id" id="id" readonly value="<?= $_GET['id'] ?>"><br><br>
		<label>First Name</label><br>
		<input type="text" name="fname" id="fname" value="<?= $_GET['firstName'] ?>"><br><br>
		<label>Last Name</label><br>
		<input type="text" name="lname" id="lname" value="<?= $_GET['lastName'] ?>"><br><br>
		<input type="submit" name="submit" id="submit" value="Update Data"><br><br>
		<h2 id="notification"></h2>
	</form>
</div>

	<script type="text/javascript" src="jquery.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#submit').click(function(event) {
				event.preventDefault();
				$.ajax({
					url: "update.php",
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