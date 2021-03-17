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

    if (isset($_REQUEST['update'])) {

        $id = $_REQUEST['id'];
        $role = $_REQUEST['role'];
         $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $fullname = $_REQUEST['fullname'];
        

        $sql = "UPDATE users SET role = '".$role."' , username  = '".$username."' , password = '".$password."' , name = '".$fullname."'  WHERE id = '".$id."'";


        $result = mysqli_query($conn,$sql);


        if (mysqli_error($conn)) {
            # code...
            echo 'the problem with request '.mysqli_error($conn);
        } 
}
?>
<button  class="btn btn-primary " type="button"><a class="text-white" href="userinfo.php">Go Back</a></button>
</body>
</html>