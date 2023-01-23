<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
	<h1> Student Registration </h1>
	<br><br>

	<form method="post" action="show.php">
		<label> Frist Name </label>
		<input type="text" name="fname" required>

<br><br>
		<label> Last Name </label>
		<input type="text" name="lname" required>



		<br><br>
	<input type="radio" name="gender" value="male"><label>Male</label>
	<input type="radio" name="gender" value="Female"><label>female</label>
	<input type="radio" name="gender" value="other"><label>Other</label>
			<br><br>
			
		<label>City</label>

		<select name="city">
			<option>Select </option>
			<option value="Mehsana">Mehsana </option>
			<option value="Patan">Patan </option>
			<option value="Surat">Surat </option>
			<option value="Rajkot">Rajkot </option>
		</select>

		<br><br>
		<label>Address</label>
		<textarea placeholder="Enter address" name="add"></textarea>

<br><br>
		<label> Mobile </label>
		<input type="text" name="mo" required>

<br><br>
		<label> Email </label>
		<input type="text" name="em" required>
<br><br>

<button type="submit" name="submit">Submit</button>

	</form>




</center>

</body>
</html>