
<!Doctype HTML>
<head>
	<title> Login </title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	
	
<?php
	include("user.php");
	$nome = $_POST["netid"];
	$pass = $_POST["pass"];
	$db = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=admin123");  
	$query = "select email, password from login ";  
	$result = pg_query($query); 

// Mysql_num_row is counting table row
$count=pg_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("netid");
session_register("pass"); 
session_start();
}
else {
echo "Wrong Username or Password";
}
?>


</body>

</html>
 