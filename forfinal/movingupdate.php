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
        $name = $_REQUEST['name1'];
         $adressfrom = $_REQUEST['adressfrom1'];
        $adressto = $_REQUEST['adressto1'];
        $phonenumber = $_REQUEST['phonenumber1'];
        $movingdate = $_REQUEST['movingdate1'];
        

        $sql = "UPDATE moving SET Name = '".$name."' , Adressfrom  = '".$adressfrom."' , Adressto = '".$adressto."' , Phonenumber = '".$phonenumber."', Movingdate = '".$movingdate."'  WHERE id = '".$id."'";


        $result = mysqli_query($conn,$sql);


        if (mysqli_error($conn)) {
            # code...
            echo 'the problem with request '.mysqli_error($conn);
        } 
}
?>
<button  class="btn btn-primary " type="button"><a class="text-white" href="movinginfo.php">Go Back</a></button>
</body>
</html>