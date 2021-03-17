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
<?php include "nav.php" ?>

<?php

    if (isset($_REQUEST['submit'])) {

        #$id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $problem = $_REQUEST['problem'];

        $sql1 = "INSERT INTO forhelp(Name,Phone,Email,Problem) VALUES('".$name."','".$phone."','".$email."','".$problem."')";


        $result1 = mysqli_query($conn,$sql1);


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
    <h1 class="fw-normal">We are very sorry that you are having problems. We will try to solve it as soon as possible.</h1>
    <p>Your request in processing. Our colleagues will contact you during the day by phone or email.</p>
    <button  class="btn btn-primary " type="button"><a class="text-white" href="more.php">Go Back</a></button>
</div>
<?php include "footer.php" ?>
</body>
</html>