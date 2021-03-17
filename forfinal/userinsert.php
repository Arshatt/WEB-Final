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

      
        $role = $_REQUEST['role'];
         $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $fullname = $_REQUEST['fullname'];

        $sql1 = "INSERT INTO users(role,username,password,name) VALUES('".$role."','".$username."','".$password."','".$fullname."')";


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
<button  class="btn btn-primary " type="button"><a class="text-white" href="userinfo.php">Go Back</a></button>
</body>
</html>