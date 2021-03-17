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

    if (isset($_REQUEST['update1'])) {

        $id = $_REQUEST['id'];
         $name = $_REQUEST['name'];
         $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $problem = $_REQUEST['problem'];
        

        $sql = "UPDATE forhelp SET Name = '".$name."' , Phone  = '".$phone."' , Email = '".$email."' , Problem = '".$problem."'  WHERE id = '".$id."'";


        $result = mysqli_query($conn,$sql);


        if (mysqli_error($conn)) {
            # code...
            echo 'the problem with request '.mysqli_error($conn);
        } 
}
?>
<button  class="btn btn-primary " type="button"><a class="text-white" href="helpinfo.php">Go Back</a></button>
</body>
</html>