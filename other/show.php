<?php 

$Fname = $_POST['fname'];
$Lname = $_POST['lname'];
$gender = $_POST['gender'];
$ct = $_POST['city'];
$mobile = $_POST['mo'];
$email = $_POST['em'];
$address = $_POST['add'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	table{
		border-collapse: collapse;

	}
	td{
		padding: 10px;
	}
</style>
<body>

	<center>
	<h1>Student information </h1>

	<table border="1">
		<tr>
			<td>Name </td>
			<td><?php echo "{$Fname} {$Lname}"; ?></td>
		</tr>

		<tr>
			<td>Gender  </td>
			<td><?php echo "{$gender}"; ?></td>
		</tr>

		<tr>
			<td>City  </td>
			<td><?php echo "{$ct}"; ?></td>
		</tr>


		<tr>
			<td>Mobile </td>
			<td><?php echo "{$mobile}"; ?></td>
		</tr>

		<tr>
			<td>Email </td>
			<td><?php echo "{$email}"; ?></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><?php echo $address; ?></td>
		</tr>

	</table>
</center>
</body>
</html>