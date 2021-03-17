<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<style>
		
	</style>
	<title>Document</title>
	
</head>
<body class="bg-light" >
	<?php include "nav.php"; ?>
	<div class="container ">
		
	 <form  style="margin-top: 120px;" action="DBforhelp.php" method="post">
	 	<div class="row">
    	<div class=" m-4 fst-italic">
  		<h1>Please if you have any questions fill the form below:</h1>
  	    </div>

    	<div class="col-xxl  mb-1">
		<label for="exampleInputName1" class="form-label">Name</label>
		<input name="name" type="name" class="form-control" required autofocus>		
    	</div>

    	<div class="col-xxl  mb-1">
    		<label for="exampleInputNumber1" class="form-label">Phone number</label>
    		<input name="phone" type="phone" class="form-control" required >
    	</div>

		  <div class="col-xxl  mb-1">
		    <label for="exampleInputEmail1" class="form-label">Email address</label>
		    <input name="email" type="email" class="form-control"  required>
		  </div>

		  <div class="col-xxl  mb-1">
		  <label for="exampleFormControlTextarea1" class="form-label">Describe your problem</label>
		  <textarea name="problem" class="form-control" rows="3"  required></textarea>
		</div>

		 <div class="d-grid gap-2 col-6 m-4 w-50 "> <button type="submit" class="m-4 btn btn-warning" name="submit">Send form</button>
		</div>
	</div>
		</form>
	</div>

		  <?php include "footer.php"; ?>
</body>
</html>