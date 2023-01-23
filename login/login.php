<?php
 session_start();

include 'pdo_db_con.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title> login </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
<div class="container">
<div class="row">
	<div class="col-sm-4"></div>
	
	<div class="col-sm-4">
			<div class="login_form">
				<!-- <img src="logonb.png " class="logo img-fluid"> -->
				<h1 class="text-center mb-4"> Login Admin  </h1>


			<form method="post" action="">
		    <div class="mb-3">
		    <label   class="lable_text form-label"> Username or Email  </label>
		    <input type="text"  class="form-control from_controlm" name="us_email"autocomplete="off"       id="">
		   
		    </div>
		    <div class="mb-3">
		    <label class="lable_text form-label">Password</label>
		    <input type="password" class="form-control from_controlm" name="password" autocomplete="off"    id="">
		    </div>
		   
		    
		    <button type="submit" name="login" class="from_btn btn btn-primary">Login </button>
		    </form>
		<br>

		<p> Don't Have account ? <a href="signup.php"> Sign Up</a> </p>

		</div>
	</div>

	<div class="col-sm-4"></div>
	
</div>

</div>
	<script src="swwetalert/sweetalert.min.js"></script>
    <script src="js/jgru.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>


<?php 

if(isset($_POST['login'])){

	$Email = $_POST['us_email'];
 	$Pass  = $_POST['password'];


	 $query = "SELECT * FROM logintbl WHERE email='$Email' AND password='$Pass'";
	// //$query = "SELECT * FROM usertbl";

      $result = $con->query($query);
       foreach($result->fetchAll(PDO::FETCH_ASSOC) as $row) {
       $unp =  $row['username'];
       }

      $rc = $result->rowCount();

 //   // echo "<script>alert($rc);</script>";

    	if($rc == 1){
    		 //echo "<script>alert('$unp login successfully..');</script>";
    		$_SESSION['uname'] = $unp;
    		header('Location:../display.php');
    	}else{
    		echo "<script>alert('Please Enter Valid Username And Password');</script>";
    	}
    	 
}

?>

