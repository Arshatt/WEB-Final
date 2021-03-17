<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
	<?php
    require('connection.php');


?>

<?php include "nav.php" ?>
<?php

    if (isset($_REQUEST['order'])) {

        #$id = $_REQUEST['id'];
        $Name = $_REQUEST['Name'];
        $from = $_REQUEST['from'];
        $to = $_REQUEST['to'];
        $Phone = $_REQUEST['Phone'];
        $date = $_REQUEST['date'];

        $sql = "INSERT INTO moving(Name,Adressfrom,Adressto,Phonenumber,Movingdate) VALUES('".$Name."','".$from."','".$to."','".$Phone."','".$date."')";


        $result = mysqli_query($conn,$sql);


        if (mysqli_error($conn)) {
            # code...
            echo 'the problem with request '.mysqli_error($conn);
        }
        else {
            $id = mysqli_insert_id($conn);
            
        }


    }
    
?>

<div class="container" style="padding-top: 100px;padding-bottom: 100px;">
	<h1 class="fst-italic">Thank you for choosing us, we appreciate that</h1>
	<p>Your request in processing. Our colleagues will contact you during the day by phone or email.</p>
	<button  class="btn btn-primary " type="button"><a class="text-white" href="more.php">Go Back</a></button>
</div>

<?php include "footer.php" ?>
</body>
</html>