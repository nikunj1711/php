<?php 

require 'pdo_db_con.php';

$eno = $_GET['id'];

$query = "SELECT * FROM usertbl WHERE eno='$eno'";
$result = $con->query($query);

foreach($result->fetchAll(PDO::FETCH_ASSOC) as $row) {

	$feno =  $row['eno'];
	$fname =  $row['name'];
	$fEmail = $row['email'];
	$fGenf =  $row['gender'];
	$fmob = $row['mobile'];
	$fdate = date('Y-m-d',strtotime($row['dob']));
	$oldimg = $row['image'];

}

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
		<div class="row">
			<div class="col-sm-2"></div>

			

			<div class="col-sm-8">
			<div class="login_form">
				<h1 style="text-align: center;">Update Your Data </h1>

<form method="post" action="" enctype="multipart/form-data">


			<div class="row mt-5">
				<div class="col-sm-3">

					<h6> E NO:</h6> 
					<input type="text" name="ueno" class="form-control" value="<?php echo $feno ;?> " disabled>

				</div>
				<div class="col-sm-6">

					<h6> NAME: </h6>
					<input type="text" name="uname" value="<?php echo $fname ;?> "  class="form-control">

				</div>

				<div class="col-sm-3">

					<h6>Dob:</h6>
					<input type="date" name="udob" class="form-control" value="<?php echo $fdate;?>">

				</div>
			</div>

			<div class="row mt-3">
				<div class="col-sm-7">

					<h6>Email:</h6>
					<input type="text" name="uEmail" value="<?php echo $fEmail; ?>" class="form-control">

				</div>
				<div class="col-sm-5">
					<h6>Mobile :</h6>
					<input type="text" name="umob" value="<?php echo $fmob; ?>" class="form-control">

					

				</div>
			</div>

			<div class="row mt-3">
				 
				<div class="col-sm-5">


			<div class="form-check mt-4">
				<h6>
					<input class="form-check-input " type="radio" name="ugen" value="male" <?php if($fGenf == 'male'){ echo "checked";}?>>
					<label class="form-check-label mr-4" >Male </label>
						
					<input class="form-check-input" type="radio" name="ugen" value="female"<?php if($fGenf == 'female'){ echo "checked";}?>>
					<label class="form-check-label mr-4"  >FeMale </label>
						
					<input class="form-check-input" type="radio" name="ugen" value="Other" <?php if($fGenf == 'Other'){ echo "checked";}?>>
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
					<input type="file" name="new_edit_img" class="form-control">
				 
				 	<input type="hidden" class="form-control" name="eold_img"          value="<?php echo $oldimg;?>">

				</div>


			</div>

		 
					

					

			<div class="row">
				

			<div class="col-sm-12 mt-5 text-center">
			  <button type="submit" name="Usubmitbtn" class="btn btn-info pl-5 pr-5">   Update User </button>
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

if(isset($_POST['Usubmitbtn'])){
	//$eno    = $_POST['ueno'];
	$name   = $_POST['uname'];
	$email  = $_POST['uEmail'];
	$phone  = $_POST['umob'];
	$gender = $_POST['ugen'];
	$dob    =  date('Y-m-d', strtotime($_POST['udob']));
   // $new_img = $_FILES['uImage']['name']; 
   // $old_img = $_POST['image_old'];
   $new_img = $_FILES['new_edit_img']['name'];
   $old_img = $_POST['eold_img'];

   if($new_img != '') {
	$u_image = $_FILES['new_edit_img']['name']; 
	}
	else
	{
	    $u_image = $old_img;
	}
	
		if($_FILES['new_edit_img']['name'] !='') 
		{
		 	 if(file_exists("upload/".$_FILES['new_edit_img']['name'])) 
			 {  
				echo  " image Already Exited; ";
 	            //header('Location: fooditeam.php');
	         }else{

	         	$query = "UPDATE usertbl SET name='$name', email='$email',gender='$gender',dob='$dob',mobile='$phone',image='$u_image' WHERE eno='$eno'";

	         	$result = $con->query($query);
	         	move_uploaded_file($_FILES['new_edit_img']['tmp_name'], "upload/".$_FILES["new_edit_img"]["name"]);

		        unlink("upload/".$old_img);

		        // header('Location: display.php');
		        echo "<script> alert('row Updated..');</script>";
		        ?>
    		    <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/msc(CA&IT)/PDO_CRUD/display.php"> 
          	    <?php
		       

		       // echo " Daata Edit successfully. ";

	        }
		}else{


			$query = "UPDATE usertbl SET name='$name', email='$email',gender='$gender',dob='$dob',mobile='$phone',image='$u_image' WHERE eno='$eno'";
	         	$result = $con->query($query);


	         	if($result){

	         		if($_FILES['new_edit_img']['name'] != '')
					{
					move_uploaded_file($_FILES['new_edit_img']['tmp_name'], "upload/".$_FILES["new_edit_img"]["name"]); 


			 		unlink("upload/".$old_img);
					}else{}

					//echo "Food Items successfully updated ";
					 // header('Location: display.php');
					 echo "<script> alert('row Updated.');</script>";
					 ?>
    		    <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/msc(CA&IT)/PDO_CRUD/display.php"> 
          	    <?php
		            
		
	         	}//if result close  
	         	else{
						echo "record not updated  last";
			} 

		}
	}


?>

 
