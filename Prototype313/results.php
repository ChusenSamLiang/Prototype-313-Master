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
		<link href="css/livepreview-demo.css" rel="stylesheet" type="text/css">
		<link href="images/logo.png" rel="shortcut icon">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-linkpreview.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/proxy-ajax.js"></script>
		<script src="js/jquery-live-preview.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script> 
		<script type="text/javascript">
			$(document).ready(function() { $(".livepreview").livePreview(); });
		</script> 

	</head>
	<body>
		
		<?php include 'header.php' ?>
		
		<form action="results.php" method="get">
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
		</form>
			<?php
				echo '<div id="results">';
				
				$db = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=philip");  
				$company = $_GET['ID'];
				
				$query = "SELECT DISTINCT companyName, companyAddress FROM \"Company\".company WHERE companyName LIKE '$company%'";
				$result = pg_query($query); 
				$n1 = pg_affected_rows($result);

				if ($n1 ==0) {
					print("<p style='text-align:center;'>No records found. No records match.</p>\n");
				}
				else {
					print("\n<div id=\"wrapper\">\n");
					print("<table>\n");
					print("<th style = 'font-size:1.4em;font-family:Trebuchet MS; '>Companies<br><br></th>\n");
					$counter = 0;
					while ($row = pg_fetch_array($result)) {
						$counter++;
						print("\t<tr>\n");
						for($i=0;$i<2;$i++){
							if(substr($row[$i], 0, 4) == "http"){
								$row[0] = str_replace(' ', '_', $row[0]);
								exec("linkpreview.exe $row[0] $row[$i] $counter", $out);	
								print($out[$counter-1]);
							}
						}
						print("\t</tr>\n");
					}
					print("</table>\n");
					
				}
				pg_free_result($result);
				pg_close($db);
				
				echo '</div>';
				include 'footer.php'
			?>
			
	</body>
</html>