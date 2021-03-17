<?php require "connection.php" ?>
	<?php  

	$sql = "SELECT * FROM moving ORDER BY Name";

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
	<form class="grid" action="movinginsert.php" method='post'>
	   <h1>For Insert</h1>
      <div></div>
        Name <input type='name' name='name'><br>
        Adress from: <input type='text' name='adressfrom'><br>
        Adress to: <input type='text' name='adressto'><br>
        Phone number: <input type="text" name="phonenumber"><br>
        Moving date: <input type="date" name="movingdate"> <br>
        <input type="submit" name="insert" value="Insert">
    </form>
    <form class="grid" action="movingupdate.php" method='post'>
    <h1>For Update</h1>
    <h1></h1>
	    Id <input type='text' name='id'><br>
        Name <input type='name' name='name1'><br>
        Adress from: <input type='text' name='adressfrom1'><br>
        Adress to: <input type='text' name='adressto1'><br>
        Phone number: <input type="text" name="phonenumber1"><br>
        Moving date: <input type="date" name="movingdate1"> <br>
        
        <input type="submit" name="update" value="Update">
    </form>
    <form class="grid" action="movingdelete.php" method='post'>
    <h1>For Delete</h1>
    <h1></h1>
	    Id <input type='text' name='id'><br>
        
        <input type="submit" name="delete" value="Update">
    </form>
    <button style="align-content: center;"  class="btn btn-primary " type="button"><a class="text-white" href="check.php">Go Back</a></button>
</body>
</html>