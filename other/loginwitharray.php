<?php 

session_start();

$logininfo = array("nikunj"=>"1234","khushi"=>"12345","Rahul"=>"2325");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post">
	<label>username </label><br><br>
	<input type="text" name="username"><br><br>
	<label>password </label><br><br>
	<input type="text" name="password"><br><br>
	<input type="submit" name="submit" value="submit"> 
</form>
</body>
</html>




<?php 
if(isset($_POST['submit'])){
$un = $_POST['username'];
$pwd = $_POST['password'];

$_SESSION['name'] = $un;

	foreach ($logininfo as $name => $pass) {

		 if($name==$un && $pass==$pwd)
		 {
		 	header('location:weclome.php');
		 }
		}
			 echo "<script>alert('wrong password and username');</script>";
	}
?>