<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>

	<?php require "connection.php"; ?>
	
	  
	 
	</div>
	<?php if ($_SESSION['role']=='admin'){
		require "more.php";
		require "buttonForAdmin.php";
		require "buttons.php";

	} 
	else{
		require "more.php";
		require "buttons.php";
	}
	?>

</body>
</html>