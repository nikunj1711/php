
 </table> 
<!DOCTYPE html>
<html>
<head>
	<title>table </title>
	<link rel="stylesheet" href="bs/css/bootstrap.min.css">
	<style type="text/css">
		
	.box{
	margin-top: 50px;
	background-color: #fff;
	padding: 20px;
	box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);
	border-radius: 5px;
		}
	</style>
</head>
<body>

	<div class="container">

<form method="post">
	<br>
<button type="submit" name="clickme" class="btn btn-info"> total </button>

<br> <br>
<?php 

$stu_name = array(
			"nikunj"=>array("Php"=>45,"Kotlin"=>87,"WUT"=>56),
			"tanvi"=>array("Php"=>80,"Kotlin"=>90,"WUT"=>100),
			"Arya"=>array("Php"=>100,"Kotlin"=>100,"WUT"=>100),
			"Khushi"=>array("Php"=>70,"Kotlin"=>80,"WUT"=>90),
			"senha"=>array("Php"=>80, "Kotlin"=>100,"WUT"=>90)
				);

?>

<div class="box"> 


<table border='1' class="p-3">
<tr> 
<td>sname </td>
<td>PHP</td>
<td>Android</td>
<td>WUT</td>

<?php 
if(isset($_POST['clickme'])){
?>
<td>total</td>
<td>Pers</td>

<?php

}

?>



</tr>

<?php
foreach($stu_name as $name=>$marks){
		echo "<tr class='p-3'>";
		echo "<td class='p-3'>".$name."</td>";

		
	foreach($marks as $sub=>$mar){

		echo "<td class='p-3'>".$mar."</td>";			 
	} 
		$ms = array_sum($marks);


 		$per = $ms *100 / 300;
	 	
	  if(isset($_POST['clickme'])){


 		echo "<td class='p-3'>".$ms."</td>";

		echo "<td class='p-3'>". number_format($per,2)."%</td>";
		echo "</tr>";
		}
}

?>



</div>

</div>



 <script src="bs/js/bootstrap.min.js"></script>
</form>
</body>
</html>