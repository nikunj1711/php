<!DOCTYPE html>
<html>
<head>
	<title>login from</title>
</head>
<body>


<form method="post" autocomplete="off">
	<input type="text" name="username" placeholder="enter username" value="<?php if(isset($_COOKIE['usernameCookie'])){echo$_COOKIE['usernameCookie']; } ?>"
	><br><br>
	<input type="text" name="password" placeholder="enter username" value="<?php
	if(isset($_COOKIE['usernameCookie'])){echo$_COOKIE['passwordCookie']; } ?>"><br><br>
	<input type="checkbox" name="remiber" 
	<?php if(isset($_COOKIE['usernameCookie'])){ ?> checked <?php } ?>> <br><br>
	<button type="submit" name="submit">Login</button>
</form>

</body>
</html>

<?php 




if(isset($_POST['submit'])){

$un = $_POST['username'];
$pwd = $_POST['password'];
	//header('location:home.php');
	if(isset($_POST['remiber'])){

		setcookie("usernameCookie",$un,time()+60);
		setcookie("passwordCookie",$pwd,time()+60);
		header('location:home.php');
	
	}
	else{
		if(isset($_COOKIE['usernameCookie']) && isset($_COOKIE['passwordCookie'])){

		setcookie("usernameCookie",time()-36000);
		setcookie("passwordCookie",time()-36000);	
		header('location:home.php');
		}
	}
}

?>