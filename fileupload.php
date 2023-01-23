<?php 
require 'pdo_db_con.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>File Upload </title>
</head>
<body>

	<form method="post" enctype="multipart/form-data">
		<label>Select Image </label>
		<br><br>
		<input type="file" name="photo" value="mypdf.pdf">
        <br><br>
		<button type="submit" name="submit">submit</button>
	</form>

</body>
</html>

<?php
//var_dump($_FILES);
if(isset($_POST['submit'])){

// img size
$imgsize =  $_FILES['photo']['size'];
echo "<br>";
// img name 
$org_name =  $_FILES['photo']['name'];
$explode_value = explode(".",$org_name);

$imgtype = $explode_value[1];
$strimgtype = strtolower($imgtype);

	//this is rewriting file name uisng  "str_shuffle"
   $strshufflevale = str_shuffle($explode_value[0]);
   $imgnameing = array("$strshufflevale","$imgtype");
   $namefinel =  implode(".",$imgnameing);

// echo "<br>";
// echo "original name==>".$org_name;
// echo "<br>";
// echo  "suffle name==>".$namefinel;

   //this is rewriting file name uisng  " rand "
 $randname = rand(1,99999999999);
 $imagnamingwithrand = array("$randname","$imgtype");
 $namefinel_rand =  implode(".",$imagnamingwithrand);


//2mb = 2000000 bytes
//5mb = 5000000 bytes
echo "<br>";

$valid_filetype = array('jpg','jpeg','png');

if(in_array($strimgtype , $valid_filetype))
{
	// echo "file <b>ext</b> is good <br>";
	if($imgsize < 2000000){
	//	echo "file <b>size</b> is good <br>";
		 
		 $query = "INSERT INTO one_file (image) VALUES ('$namefinel_rand')";
	     $result = $con->query($query);

	     if($result){
		    	echo "<script> alert('Image Uploaded');</script>";
		    	  
		    	  move_uploaded_file($_FILES['photo']['tmp_name'],
			      "upload/".$namefinel_rand);
		    }
		    else{
		    	echo "<script> alert('Image NOT Uploaded');</script>";
		    }

		
  
	}
	else
	{
		echo "<h3 style='color: red;'>Please upload only 2mb size Image</h3> <br>";
	}
}else
{
	 echo "<h3 style='color: red;'>Please upload only jpg , jpeg , or png file </h3> <br>";
}

}



?>













<center><h1> All Image are here  </h1>
	</center>

<?php 
		$query = "SELECT * FROM one_file ORDER BY imgid";
		$result = $con->query($query);
		foreach($result->fetchAll(PDO::FETCH_ASSOC) as $row) {
?>

	 <img src="<?php echo "upload/".$row['image']; ?>" width="100" height="100" style="margin-left: 10px;">
	 

	<?php 
}

	?>

 

