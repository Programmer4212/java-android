<?php
if(isset($_Post["btnLogin"]))
{header("Location:LoginUser.php");}
?>
<?php
if(isset($_Post["create"]))
	{header("Location:Register.php");}
?>
<?php
if(isset($_Post["create"]))
	{header("Location:admin.php");}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title> Welcome</title>
      <meta charset="UTF-8">
	  <meta http-equiv="X-UA-Compatible" content="IE-edge">
	  <meta name="viewport" content="width=device-width, initial-scale">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="Welcome.css">
	   
 </head> 
 <style>
body{background-image: url('./images/background');
no-repeat;
background-repeat:no-repeat;
background-attachment:fixed;
background-size: 100% 100%;
}</style>

<body>

<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">BookIO</a>
  
	</nav></div>

</div>

<div class="container">
  <div class="row">
  <div class="start">
    <div class="col">
	<form action=" LoginUser.php" method="post">
		<div class="container">
		<div class="row"> 
		<div class= "col-col-sm-3">
		<br>
		<br>
		<br>
		<br>
		<br>
		<h1 > WELCOME BACK</h1>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<p> To stay connected with us please login to view your personal account </p>
		<br>
		<br>
		<br>
		<br>
		<br>
		 <hr class="mb-3">
		 
		 <input class="btn btn-light" type= "submit" name = "btnLogin" value= "SIGN IN" >
		 </div>
		 </div>
		</div>
</form>
</div>
</div>

 <div class="create">
<div class="col">
<form action=" Register.php" method="post">
<div class="container">
		<div class="row"> 
		<div class= "col-col-sm-3">
		<br>
		<br>
		<br>
		<br>
		<br>
		<h1> CREATE ACCOUNT</h1>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<p> Click on the button beloe to create your account </p>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		 <hr class="mb-3">
<input class="btn btn-light" type= "submit" name = "create" value= "SIGN UP" >
</div>
		 </div>
		</div>
</form>
    </div>
 </div>	
 <div class="welAdmin">
<div class="col">
<form action="admin.php" method="post">
<div class="container">
		<div class="row"> 
		<div class= "col-col-sm-3">
		<br>
		<br>
		<br>
		<br>
		<br>
		<h1> BookIO ADMIN DASHBOARD</h1>
		<br>
		<br>
		<br>
		<br>
		<p> Click on the button below </p>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		 <hr class="mb-3">
<input class="btn btn-light" type= "submit" name = "admin" value= "GO" >
</div>
		 </div>
		</div>
</form>
    </div>
 </div>	
</div>
</div>
</div>




     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"><script>




</body>
</html>
