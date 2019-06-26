<!DOCTYPE html>
<html>
	<head>
    </head>
<body>

<?php include 'nav.php'; ?> 

<div style="margin:50px;">
    <span>All Users</span>    
    <div id="result"></div>
</div>

	<script type="text/javascript" src="jquery.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
            $("#view_all").click(function(event) {
                event.preventDefault();
                $.ajax({
                   url: "load.php",
                   dataType: "html",
                   success: function(Result) {
                        $("#result").html(Result);
                   } 
                });
            });
        });
	</script>


</body>
</html>