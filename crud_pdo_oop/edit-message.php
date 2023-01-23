<?php 
require 'db-utils.class.php';
$obj = new DBUtils();

//$obj->getAllMessages();

//$obj->dbConnect();

 if(isset($_GET['eid'])){
  $editid = $_GET['eid'];
  $myrecord = $obj->displaydataByid($editid);
    foreach ($myrecord as $rows) {}
 }

 if(isset($_POST['Updatebtn'])){
	$editid = $_GET['eid'];
 	$obj->updateMessage($_POST,$editid);
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

	<a href="index.php"><button class="btn btn-info">View Record </button></a>
		<div class="row">
			<div class="col-sm-2"></div>

			

			<div class="col-sm-8">
			<div class="login_form">
				<h1 style="text-align: center;">UPDATE MESSAGE   </h1>

<form method="post" action="">


			<div class="row mt-5">
				<div class="col-sm-7">
					<h6> author NAME: </h6>
					<input type="text" name="uuname" value="<?php echo $rows['author']; ?>" class="form-control" required>
				</div>
				<div class="col-sm-5">
					<h6>msgDate</h6>
					<input type="date" name="umusgdate" value="<?php echo $rows['msgDate']; ?>" class="form-control" required>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-sm-5">
					<h6>subject:</h6>
					<input type="text" name="usubject" value="<?php echo $rows['subject']; ?>" class="form-control" required>
				</div>
				<div class="col-sm-7">
					<h6>msgBody :</h6>
					<!-- <input type="text" name="mob" class="form-control"> -->
					<textarea name="umsgBody" class="form-control" placeholder="Write  your message....." required><?php echo $rows['msgBody']; ?></textarea>
				</div>
			</div>
			<div class="row">
			<div class="col-sm-12 mt-5 text-center">
			  <button type="submit" name="Updatebtn" class="btn btn-info pl-5 pr-5">   Add message </button>
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