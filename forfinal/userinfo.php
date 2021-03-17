
	<?php require "connection.php" ?>
	<?php  

	$sql = "SELECT * FROM users ORDER BY username";

	$result = mysqli_query($conn,$sql);

	if (mysqli_error($conn)) {
		# code...
		echo(mysqli_error($conn));
	}
	else {
		#print_r($result);
		$ponovi = mysqli_fetch_all($result,MYSQLI_NUM);

		print "<table width='70%' border= '5px'>";
		
		for ($i=0; $i < count($ponovi); $i++) { 
			# code...
			print "<tr>";
			for ($j=0; $j < count($ponovi[$i]); $j++) { 
				
				print '<td>';
				print $ponovi[$i][$j] ;
				print '</td>';
				
				
			}
			print"</tr>";
		}
		print "</table>";
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
		<style> .grid{
		      display: grid;
		      grid-template-columns: 250px 450px;
		      background-color:darkgrey ;
		      
		      padding: 10px;
		      grid-gap:5px;
		      margin-top: 100px;
		    }
    </style>
	<title>Document</title>
</head>
<body>
	<form class="grid" action="insertusers.php" method='post'>
	   <h1>For Insert</h1>
      <div></div>
        role <input type='text' name='role'><br>
        username <input type='text' name='username'><br>
        password <input type='password' name='password'><br>
        name <input type='text' name='fullname'>
        <div></div>
        <input type="submit" name="insert" value="Insert">
    </form>
    <form class="grid" action="updateusers.php" method='post'>
    <h1>For Update</h1>
    <h1></h1>
	    Id <input type='text' name='id'><br>
        role <input type='text' name='role'><br>
        username <input type='text' name='username'><br>
        password <input type='password' name='password'><br>
        name <input type='text' name='fullname'>
        <div></div>
        <input type="submit" name="update" value="Update">
    </form>
    <form class="grid" action="userdelete.php" method='post'>
    <h1>For Delete</h1>
    <h1></h1>
	    Id <input type='text' name='id'><br>
        
        <input type="submit" name="delete" value="Update">
    </form>
    <button style="align-content: center;"  class="btn btn-primary " type="button"><a class="text-white" href="check.php">Go Back</a></button>
</body>
</html>