<?php @session_start();
 session_destroy();
?>
<script>
	alert("You have been logged out!");
	window.location="../home.php";
</script>
