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
	
		<div class="panel-group" id="accordion">
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
		          What is Prototype 313?
		        </a>
		      </h4>
		    </div>
		    <div id="collapseOne" class="panel-collapse collapse in">
		      <div class="panel-body">
		        Prototype 313 is a web based platform to help college students at NYU to prepare for interview questions. There's ton of data on interview questions. At the same time, there's resources on start up companies in many incubators located in New York.
		      </div>
		    </div>
		  </div><br>
		  
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
		          Where did the name come from?
		        </a>
		      </h4>
		    </div>
		    <div id="collapseTwo" class="panel-collapse collapse in">
		      <div class="panel-body">
		        The name Prototype 313 came from one of the co-founders experience. He frequently passes by this room that is always locked, hence the number 313. We saw this door as something thats hindering the interviewing process of students. Its a door that is closed for us, an opportunity lost. Thus, this platform was created to open more doors of opportunity and growth for college students.
		      </div>
		    </div>
		  </div><br>
		  
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
		          Why use this site?
		        </a>
		      </h4>
		    </div>
		    <div id="collapseThree" class="panel-collapse collapse">
		      <div class="panel-body">
		        It provides a lot of practice for beginners. Our database has plethora of questions stored. In the forum, theres ongoing discussions about students interview experiences. Thus, its great to heard about another person's experience with a certain company. There are so many things that you can learn from it, whether its mistakes, types of questions asked and even the interaction with the interviewer.
		      </div>
		    </div>
		  </div>
		</div><br>
		
		<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
          What is the purpose of this site?
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body">
        Create a community. <br> Prepare college students for the real world. <br> Network with alumni, current students. <br> Make new friends. <br> Discussion board about questions or any topics relating to their career.
      </div>
    </div>
  </div><br>
  
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
          Do I have to be a NYU student?
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse">
      <div class="panel-body">
      Yes, currently the authentication for the sign up is for a NYU email address. This site is mainly directed towards the NYU community, or better yet the Poly community in Brooklyn.
      </div>
    </div>
  </div><br>
  
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
          Can I post anything?
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse">
      <div class="panel-body">
        There is no restriction to what you can post on the forum. However, we hope that everyone will post something useful and appropriate. Since everyone is in college, we expect everyone to act like an adult. However, we do have an admin account that can remove any post that are flagged as inappropriate.      </div>
    </div>
  </div>
</div><br><br>
	

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
