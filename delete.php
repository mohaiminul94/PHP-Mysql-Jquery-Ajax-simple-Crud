<!DOCTYPE html>
<html>
	<head>
		<title>Insert Data with AJAX</title>
		<meta charset="utf-8">
</head>
<body>

<?php include 'nav.php'; ?> 

<div style="margin:50px;">
    <table celpadding=5 cellspacing=5>
        <tr>
            <tr><th>ID:</th><td><?= $_GET['id']; ?><td></td></tr>
            <tr><th>First Name:</th><td><?= $_GET['firstName']; ?><td></td></tr>
            <tr><th>Last Name:</th><td><?= $_GET['lastName']; ?><td></td></tr>
        </tr>
    </table>
    <form>
		<input type="hidden" name="id" id="id" value="<?= $_GET['id']; ?>">
		<input type="submit" name="deleteBtn" id="deleteBtn" value="Delete Data"><br><br>
		<h2 id="notification"></h2>
	</form>
</div>

	<script type="text/javascript" src="jquery.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#deleteBtn').click(function(event) {
				event.preventDefault();
				$.ajax({
                    url: "deleteUser.php",
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