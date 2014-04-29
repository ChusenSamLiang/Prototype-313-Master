<?php session_start() ?>
<!--
	Prototype 311
	CSS Document 
	
	SENIOR DESIGN I
	
	Chusen Liang
	Philip Moise
	Micheal Ye
	Jacky Guo
	
	Concepts
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
	
	<div id="collapse">
		
		<img src="images/logo.png" style="width:100px;height:100px;"><br> 
		<p>The system will be an addition to the career development center aimed to enhance the interview process for current student/alumni. The career center is geared to provide opening positions from plethora of employers. However, they are limited to just providing sufficient amount of information about the position and recruitment events. Our system can fill the need to provide further information.

This system is a web-based platform where students are able to exchange their personal experiences during interviews, such as technical questions, behavioral questions, case studies, resume questions, brain teasers and more. Within this platform, we will sort the threads that are frequently viewed and discussed. At the same time, these experiences will be sorted based on company, position and internship/full time. We want this system to focus mainly on NYU and Poly students, thus restrictions to outsiders will be heavily enforced.</p><br><br>
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
