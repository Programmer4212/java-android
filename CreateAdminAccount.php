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
   <div class="people">
<div class="col">
<br>
<br>
<br>

<h1> NOT INTERESTED</h1>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<form action=" CreateAdminAccount.php" method="post">
<input class="btn btn-primary" type= "submit" name = "create" value= "BACK" >
</form>
    </div>
</div>	

    <div class="col">
	<form action=" CreateAdminAccount.php" method="post">
		<div class="container">
		<div class="row"> 
		<div class= "col">
		<br>
		<br>
		<br>
		
		<h1 class="details"> CREATE BooKIO ADMIN ACCOUNT</h1>
		
		<br>
		<br>
		<br>
		<br>

		 <p class="details"> Please insert your personal information below </p>
		 
		 
		 <input class="form-control" type= "text" name = "adminID" required placeholder="Admin ID" >
		 <br>
		 <input class="form-control"  type= "text" name = "adminEmail" required placeholder="Admin Email">
		 <br>
		 <input class="form-control" type= "text" name = "adminPassword" required placeholder="Admin Password">
		 <br>
		 <hr class="mb-3">
		 <input class="btn btn-primary" type= "submit" name = "admincreate" value= "CREATE" >
		 </div>
		 </div>
		</div>
</form>
</div>
</div>
</div>
<div>



<?php
$conn = mysqli_connect("localhost","root",'',"bookstore1");

     if($conn === false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
        
        }

	
		$adminID 		= $_REQUEST['adminID'];
		$adminEmail		= $_REQUEST['adminEmail'];
		$adminPassword 	= $_REQUEST['adminPassword'];
				
		echo $adminID  . "" . $adminEmail . "" .  $adminPassword ; 
		
	
 $query = "INSERT INTO admin VALUES('$adminID','$adminEmail','$adminPassword');";
     $result = mysqli_query($conn,$query);

     if($result){
         
         echo "Registration Seccessful";
         
     }
     else{
          echo "Check the form and try again";
		  header("Location:AdminBord.php");

     }
	
	mysqli_close($conn);
	
	?>




     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"><script>




</body>
</html>

