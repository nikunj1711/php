<?php 
require 'pdo_db_con.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload Multiple file </title>
</head>
<body>

	<form method="post" enctype="multipart/form-data">
		<h3> Select Multiple Image </h3>
		<br><br>
		 <label>Chouse File(s)</label>

		<input type="file" name="photos[]" multiple>
	 
	

        <br><br>
		<button type="submit" name="submit">Upload</button>
	</form>

<?php
 
if(isset($_POST['submit'])){
 
 

	foreach($_FILES['photos']['name'] as $key=>$value){

		$random  = rand('111111', '999999');
		
		$filename = $random.'_'.$value;

	    move_uploaded_file($_FILES['photos']['tmp_name'] [$key],"multi_upload/".$filename);

	        $query = "INSERT INTO multi_file (images) VALUES ('$filename')";
	        $result = $con->query($query);
	}
		    if($result){
		    	echo "<script> alert('Images Uploaded');</script>";
		    }
		    else{
		    	echo "<script> alert('Images NOT Uploaded');</script>";
		    }
}

?>


	<center><h1> All Image are here  </h1>
	</center>

<?php 
		$query = "SELECT * FROM multi_file ORDER BY imgid";
		$result = $con->query($query);
		foreach($result->fetchAll(PDO::FETCH_ASSOC) as $row) {
?>

	 <img src="<?php echo "multi_upload/".$row['images']; ?>" width="100" height="100" style="margin-left: 10px;">
	 

	<?php 
}

	?>



</body>
</html>