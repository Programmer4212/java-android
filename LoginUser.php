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
<div>
	<?php
	if(isset($_POST['create'])){
		$email 				= $_POST['email'];
		$password 			= $_POST['password'];
		echo $email . "" . $password ; 
		
	}
	?>
</div>

<div class="container">
  <div class="row">
   <div class="user">
    <div class="col">
	<form action=" Index.php" method="post">
		<div class="container">
		<div class="row"> 
		<div class= "col">
		<br>
		<br>
		<br>
		<br>
		<br>
		<h1> SIGN IN TO BookIO</h1>
		 <br>
		 <br>
		 <br>
		 
		 
		 
		 <label  for="email"><b></b></label>
		 <input class="form-control" type= "text" name = "email" required placeholder="Email">
		 
		 <label for="password"><b></b></label>
		 <input class="form-control" type= "text" name = "password" required required placeholder="Password" >
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <hr class="mb-3">
		 <input class="btn btn-primary" type= "submit" name = "create" value= "SIGN IN" >
		 </div>
		 </div>
		</div>
</form>
</div>
</div>
 <div class="people">
<div class="col">
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
		 <p> Click on the button beloW to create your account </p>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
<form action=" Register.php" method="post">
 <hr class="mb-3">
<input class="btn btn-primary" type= "submit" name = "create" value= "SIGN UP" >
</form>
    </div>
</div>	
</div>
</div>




     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"><script>




</body>
</html>

























