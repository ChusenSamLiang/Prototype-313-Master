<?php session_start() ?>
<!--
	Prototype 311
	CSS Document 
	
	SENIOR DESIGN I
	
	Chusen Liang
	Philip Moise
	Micheal Ye
	Jacky Guo
	
	Company
-->

<!DOCTYPE html>
<html>
	<head>
		<title>Prototype 313</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<link href="images/logo.png" rel="shortcut icon">
	</head>

	<body>
		<?php include 'header.php' ?>
		
		<!--companies-->
		<form action = "results.php" method = "get">
		<div id="companies">
			<a href="results.php?ID=A">A</a>
			<a href="results.php?ID=B">B</a>
			<a href="results.php?ID=C">C</a>
			<a href="results.php?ID=D">D</a>
			<a href="results.php?ID=E">E</a>
			<a href="results.php?ID=F">F</a>
			<a href="results.php?ID=G">G</a>
			<a href="results.php?ID=H">H</a>
			<a href="results.php?ID=I">I</a>
			<a href="results.php?ID=J">J</a>
			<a href="results.php?ID=K">K</a>
			<a href="results.php?ID=L">L</a>
			<a href="results.php?ID=M">M</a>
			<a href="results.php?ID=N">N</a>
			<a href="results.php?ID=O">O</a>
			<a href="results.php?ID=P">P</a>
			<a href="results.php?ID=Q">Q</a>
			<a href="results.php?ID=R">R</a>
			<a href="results.php?ID=S">S</a>
			<a href="results.php?ID=T">T</a>
			<a href="results.php?ID=U">U</a>
			<a href="results.php?ID=V">V</a>
			<a href="results.php?ID=W">W</a>
			<a href="results.php?ID=X">X</a>
			<a href="results.php?ID=Y">Y</a>
			<a href="results.php?ID=Z">Z</a>
		</div>
		  
		<?php include 'footer.php' ?>
		
		<!--Javascript================================================== -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
		<!-- Bootstrap jQuery plugins compiled and minified -->
		<script src="js/bootstrap.min.js"></script>
		<script>
		  $(document).ready(function(){
			$('.carousel').carousel({
			  interval: 2000
			});
		  });
		</script>
	</body>
</html>
