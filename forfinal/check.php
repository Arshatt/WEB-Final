<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php session_start();
	include "connection.php";
	if (isset($_POST['username']) && isset($_POST['password'])&&isset($_POST['role'])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$role = $_POST['role'];
		
		if (empty($username)) {
		echo "Name is Required";
		}
		else if (empty($password)) {
			echo("Password is Required");
		}
		else {
			$sql ="SELECT * FROM users WHERE username='$username' AND password ='$password'";
			$result = mysqli_query($conn,$sql);

			if (mysqli_num_rows($result)==1) {
				$row = mysqli_fetch_assoc($result);
				if ($row['password']==$password && $row['role']==$role) {
							$_SESSION['name'] = $row['name'];
			        		$_SESSION['id'] = $row['id'];
			        		$_SESSION['role'] = $row['role'];
			        		$_SESSION['username'] = $row['username'];

			        		include "home.php";
						}
						else{
							echo("Incorrect name or password");
						}		
					}else{
						echo("Incorrect name or password");
					}
		}
	}
	else{
		header("Location: ../more.php");
	}
	?>
</body>
</html>