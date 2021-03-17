<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php  
		$sname = "localhost";
		$uname = "postgres";
		$password = "warface195";
		$db_name = "forfinal";

		$conn = mysqli_connect($sname, $uname, $password, $db_name);

		if (!$conn) {
			echo "Connection Failed!";
			exit();
		}?>
</body>
</html>