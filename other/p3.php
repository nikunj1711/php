<!DOCTYPE html>
<html>
<head>
	<title>String function</title>
</head>
<body>
 	<center>
	<form method="post">
		<label>Enter String</label>
		<input type="text" name="EnterStr" required>
		<button type="submit" name="GenBtn">Generate </button>
	
<br><br>
	<table border="1">
		<tr>
			<th>Choice</th>
			<th>function name </th>
			<th>Description</th>
			<th> Output</th>
		</tr>
		<!--  origenal tetx -->
		<tr>
			 <td></td>
			 <td>Original Text </td>
			 <td>This is Original Text </td>
			 <td> <?php
             
				if(isset($_POST['GenBtn'])){
				

					 echo $_POST['EnterStr'];
				}
				else{
					echo "Not Clicked";
				}
			    ?>
			     </td>
		</tr>
 			<!-- strlen -->
		<tr>
			<td><input type="checkbox" name="c1"></td>

			<td>Strlen()</td>

			<td>This function is used to find the length of string.</td>

			<td>
				<?php

				if(isset($_POST['GenBtn']) && isset($_POST['c1'])){
				$Strmain = $_POST['EnterStr'];
				$Strlenv = strlen($Strmain);
				}

				if(isset($_POST['c1'])){
					 echo $Strlenv;
				}
				else{
					echo "Not Selected";
				}
			    ?>
			 	
			</td>
		</tr>
         <!--  StrToUpper -->
		<tr>
			<td><input type="checkbox" name="c2"></td>
			<td>StrToUpper </td>
			<td>This function returns a string in uppercase of original string </td>
			<td>
				<?php
				if(isset($_POST['GenBtn']) && isset($_POST['c2'])){	 
				$strupper = strtoupper($Strmain);	
				}

				if(isset($_POST['c2'])){
					 echo $strupper;
				}
				else{
					echo "Not Selected";
				}
			    ?>

			</td>
		</tr>
		<!-- 	StrTolower -->
		<tr>
			<td><input type="checkbox" name="c3"></td>
			<td>StrTolower</td>
			<td>This function returns a string in lower case of original string.</td>
			<td>
				<?php

				if(isset($_POST['GenBtn']) && isset($_POST['c3'])){
				$strlower = strtolower($Strmain);	
				}

				if(isset($_POST['c3'])){
					 echo  $strlower;
				}
				else{
					echo "Not Selected";
				}
			    ?>
			 	
			</td>
		</tr>
	<!-- 	    Strrev -->
		<tr>
			<td><input type="checkbox" name="c4"></td>
			<td>Strrev</td>
			<td>This function returns a string in reverse order of existing string.</td>
			<td>
				<?php

				if(isset($_POST['GenBtn']) && isset($_POST['c4'])){
				$reversevv =  strrev($Strmain);
				}

				if(isset($_POST['c4'])){
					 echo  $reversevv;
				}
				else{
					echo "Not Selected";
				}
			    ?>
			 	
			</td>
		</tr>
		   <!--  ucfirst -->
		<tr>
			<td><input type="checkbox" name="c5"></td>
			<td>ucfirst()</td>
			<td>Convert the first character of string in uppercase.</td>
			<td>
				<?php
				if(isset($_POST['GenBtn']) && isset($_POST['c5'])){
				$ucfrist = ucfirst($Strmain);	
				}

				if(isset($_POST['c5'])){
					 echo  $ucfrist;
				}
				else{
					echo "Not Selected";
				}
			    ?>
			 	
			</td>
		</tr>
		   <!--  ucwords -->
		<tr>
			<td><input type="checkbox" name="c6"></td>
			<td>ucwords()</td>
			<td>Convert the first character of every word in a string to uppercase.</td>
			<td>
				<?php
				if(isset($_POST['GenBtn']) && isset($_POST['c6'])){
				$ucword = ucwords($Strmain);	
				}

				if(isset($_POST['c6'])){
					 echo  $ucword;
				}
				else{
					echo "Not Selected";
				}
			    ?>
			 	
			</td>
		</tr>



		<!--  str shuffle  -->
	<!-- 	<tr>
			<td><input type="checkbox" name="c7"></td>
			<td>str_shuffle()</td>
			<td>The str_shuffle function randomly shuffles all the characters of a string.</td>
			<td>
				<?php
				//if(isset($_POST['GenBtn']) && isset($_POST['c7'])){
				//$Strmain = $_POST['EnterStr'];
				//$strSf = str_shuffle($Strmain);	
				//}

				//if(isset($_POST['c7'])){
				//	 echo  $strSf;
				//}
				//else{
				//	echo "Not Selected";
				//}
			    ?>
			 	
			</td>
		</tr> -->

	</table>
</form>

</center>
</body>
</html>




