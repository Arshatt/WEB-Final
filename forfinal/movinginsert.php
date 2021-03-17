<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
    require('connection.php');


?>


<?php

    if (isset($_REQUEST['insert'])) {

      
        $name = $_REQUEST['name'];
         $adressfrom = $_REQUEST['adressfrom'];
        $adressto = $_REQUEST['adressto'];
        $phonenumber = $_REQUEST['phonenumber'];
        $movingdate = $_REQUEST['movingdate'];

        $sql1 = "INSERT INTO moving(Name,Adressfrom,Adressto,Phonenumber,Movingdate) VALUES('".$name."','".$adressfrom."','".$adressto."','".$phonenumber."','".$movingdate."')";


        $result1 = mysqli_query($conn,$sql1);


        if (mysqli_error($conn)) {
            # code...
            echo 'the problem with request '.mysqli_error($conn);
        }
        else {
            $id = mysqli_insert_id($conn);
            echo 'the inserted value has id '.$id;
        }


    }
    


?>
<button  class="btn btn-primary " type="button"><a class="text-white" href="movinginfo.php">Go Back</a></button>
</body>
</html>