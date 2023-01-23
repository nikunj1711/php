<?php 

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Welcome <?php echo $_SESSION['name']; ?></h1>
</body>
</html>