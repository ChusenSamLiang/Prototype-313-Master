<!DOCTYPE html>  
<head>  
	<title>Signup</title>  
	<link href="style.css" rel="stylesheet" type="text/css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
</head>  

<body>  

<?php  
$db = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=admin123");  
$query = "INSERT INTO login VALUES ('$_POST[fname]','$_POST[lname]',  
'$_POST[email]','$_POST[password]','$_POST[year]',  
'$_POST[major]')";  
$result = pg_query($query);   
?> 

</ul>  
</body>  
</html>  
