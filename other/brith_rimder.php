
<!DOCTYPE html>
<html>
<head>
	<title></title>


</head>
<body>

<form method="post">
		   <select name="dob">
		 	<option value="1">1</option>
		 	<option value="2">2</option>
		 	<option value="3">3</option>
		 	<option value="4">4</option>
		 	<option value="5">5</option>
		 	<option value="6">6</option>
		 	<option value="7">7</option>
		 	<option value="8">8</option>
		 	<option value="9">9</option>
		 	<option value="10">10</option>
		 	<option value="11">11</option>
		 	<option value="12">12</option>
		  
		 </select>  
		<!--  <input type="number" name="dob"> -->
		
<button type="submit" name="btnbrith">Submit</button>
	
</form>


</body>
</html>

<?php 


$allbrithdate = array(
	"Nikunj"=> '2001-11-17',
	"lavina"=> '2001-11-16',
	"Pratiksha"=> '1997-11-26',
	"priya"=> '2000-10-03',
	"Arya"=> '2003-09-04',
	"Rahul"=> '1999-08-05',
	"ravi"=> '1999-11-05' 
);


if(isset($_POST['btnbrith'])){



//$Entermstr = strtotime($enter_M);
//echo $enter_M;
foreach ($allbrithdate as $name=>$date) {
 	
	$dates = strtotime($date);
	$gety_M = date('m',$dates)."<br>";
 	

	$enter_M = $_POST['dob'];

	$intgervalue = intval($enter_M);

	while($intgervalue == $gety_M) {
		echo "$name => ";
		echo date('d-m-Y',$dates)."<br>";
		break;
	}
}
}



?>