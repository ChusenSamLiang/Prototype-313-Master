<?php
//Check if session id is set already, or if there is a different value for the sid than last time
		if((!isset($_SESSION['sid']) && isset($_GET['sid'])) || (isset($_SESSION['sid']) && isset($_GET['sid']) && $_SESSION['sid'] != $_GET['sid']))
			$_SESSION['sid'] = $_GET['sid'];
?>

<div id="main_header">
	<div id="header"></div>
</div> 

<div id="wrap">
<a id="top" name="top" accesskey="t"></a>
	<div id="header">
		<a href="index.php" title="Board index" id="logo"><img src="images/logo.png" alt="" title="" height="86" width="89"></a>
	</div>
	<div class="navbar">
		<ul class="bar">
			<ul class="navi">
				<li><a href="index.php">Home</a></li>
				<li><a href="concepts.php">OOP Concepts</a></li>
				<li><a href="company.php">Incubator/Company</a></li>
				<?php
				$session =isset($_SESSION['sid']) ? "?sid=".$_SESSION['sid'] : "";
				echo '<li><a href="phpbb3/index.php'.$session.'">Forum</a></li>';
				?>
			</ul>			
		</ul>
		<ul class="left">
			<li><a href="phpbb3/ucp.php?mode=register" title="Register">Register</a></li>
			<?php
			if(!isset($_SESSION['sid']))
				echo '<li><a href="phpbb3/ucp.php?mode=login" title="Login">Login</a></li>';
			else
				echo '<li><a href="logout.php" title="Logout Session">Logout Session</a></li>';
			?>
		</ul>
	</div>
</div>