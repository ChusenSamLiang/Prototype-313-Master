<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<?php
	$session = isset($_SESSION['sid']) ? "?sid=".$_SESSION['sid'] : "";
	echo '<meta http-equiv="refresh" content="0; url=phpbb3/ucp.php?mode=logout&sid='.$session.'" />';
	if(isset($_SESSION['sid'])) unset($_SESSION['sid']);
?>
</head>
</html>