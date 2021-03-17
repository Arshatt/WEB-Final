<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
	<?php include "nav.php" ?>
	<div  class="container w-50"> 
	<form style="margin-top: 120px;" class="rounded" action="check.php" method="post">
              <div class="row">
              <div class="col-xxl  mb-2">
            <label for="exampleInputName1" class="form-label">Username:</label>
            <input name="username" class="form-control" required >    
              </div>

              <div class="col-xxl  mb-2">
                <label for="exampleInputNumber1" class="form-label">Password:</label>
                <input name="password" class="form-control" required >
              </div>

             <div  class="col-xxl  mb-2">
               <label for="exampleInputNumber1" class="form-label">Role:</label>
                <select name="role" class="form-control">
                  <option  value="moderator">Moderator</option>
                  <option value="admin">Admin</option>
                </select>
             </div>
              
              <div class="d-grid gap-2  m-4 "><button type="submit" class=" btn btn-warning" name="login">LOGIN</button></div>

             </div>
            </form>
        </div>	
        <?php include "footer.php" ?>
</body>
</html>