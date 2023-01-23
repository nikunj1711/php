
<?php 
  require 'pdo_db_con.php';
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADD</title>
	 <link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">
	 <style type="text/css">
	 	.login_form {
	margin-top: 100px;
	background-color: #fff;
	padding: 30px;
	box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);
	border-radius: 5px;
}

	 </style>
</head>
<body style="background-color: #fa4251; height: 100vh; width: 100%;">



<div class="container">

	<a href="display.php"><button class="btn btn-info">View Record </button></a>
		<div class="row">
			<div class="col-sm-2"></div>

			

			<div class="col-sm-8">
			<div class="login_form">
				<h1 style="text-align: center;">Welcome  </h1>

<form method="post" action="" enctype="multipart/form-data">


			<div class="row mt-5">
				<div class="col-sm-3">

					<h6> E NO:</h6> 
					<input type="text" name="eno" class="form-control" disabled>

				</div>
				<div class="col-sm-6">

					<h6> NAME: </h6>
					<input type="text" name="name" class="form-control">

				</div>

				<div class="col-sm-3">

					<h6>Dob:</h6>
					<input type="date" name="dob" class="form-control">

				</div>
			</div>

			<div class="row mt-3">
				<div class="col-sm-7">

					<h6>Email:</h6>
					<input type="text" name="Email" class="form-control">

				</div>
				<div class="col-sm-5">
					<h6>Mobile :</h6>
					<input type="text" name="mob" class="form-control">

					

				</div>
			</div>

			<div class="row mt-3">
				 
				<div class="col-sm-5">


				<div class="form-check mt-4">
					<h6>
					<input class="form-check-input " type="radio" name="gen" value="male">
					<label class="form-check-label mr-4" >Male </label>
						
					<input class="form-check-input" type="radio" name="gen" value="female">
					<label class="form-check-label mr-4"  >FeMale </label>
						
					<input class="form-check-input" type="radio" name="gen" value="Other">
					<label class="form-check-label mr-3"  >Other  </label>
					</h6>
				</div>
				<!-- <label>Male :</label>  

				 	<input type="radio" value="male" name="gen" class="form-group">
				    FeMale : <input type="radio" value="female" name="gen" class="form-group">
				 	 Other : <input type="radio" value="Other" name="gen" class="form-group"> -->

				</div>

				<div class="col-sm-5">

					<h6>Image</h6>
					<input type="file" name="photos" class="form-control">

				</div>


			</div>

		 
					

					

			<div class="row">
				

			<div class="col-sm-12 mt-5 text-center">
			  <button type="submit" name="submitbtn" class="btn btn-info pl-5 pr-5">   REGISTER    </button>
			</div>

			 </div> 


</form>
				 
				 
			</div>
			</div>

			

			<div class="col-sm-2"></div>


		</div>
	</div>

</body>
</html>


<?php




if(isset($_POST['submitbtn'])){


	//$eno   = $_POST['eno'];
	$name  = $_POST['name'];
	$email = $_POST['Email'];
	$gender = $_POST['gen'];
	$dobs =  date('Y-m-d', strtotime($_POST['dob']));
	$phone = $_POST['mob'];

	$img = $_FILES['photos']['name'];


	//var_dump($_FILES);

   $query = "INSERT INTO usertbl (name,email,gender,dob,mobile,image) VALUES ('$name','$email','$gender','$dobs','$phone','$img')";

     move_uploaded_file($_FILES['photos']['tmp_name'],
			"upload/".$img);

    $result = $con->query($query);
    if($result){
    	

    	echo "<script> alert('row INSERTED');</script>";
    	?>
    		 <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/msc(CA&IT)/PDO_CRUD/display.php"> 
    	<?php
    }
    else{
    	echo "<script> alert('ROW NOT INSERTED');</script>";
    }



}


?>

   
 
