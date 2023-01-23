<?php 

 $student = array(
 
"Nikunj"=>array("WUT"=>"67","AF"=>"60","CDP"=>"70"),
"khushi"=>array("WUT"=>"83","AF"=>"60","CDP"=>"80"),
"Chirag"=>array("WUT"=>"100","AF"=>"80","CDP"=>"70"),
"Afrina"=>array("WUT"=>"99","AF"=>"80","CDP"=>"99")

 );
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<center>
<h1>Students Result </h1>
<br>
<br>
<table border="1">
	<tr>
	<th>Students name </th>
	<th>PHP</th>
	<th>AF </th>
	<th>CDP-1</th>

<?php 
if(isset($_POST['result_btn'])){
?>

	<th>Total </th>
	<th>Percentage </th>

	<?php 

}
?>
	</tr>

<?php 
 foreach ($student as $S_name => $S_arrayMrks) {
 	?>
	<tr>

		<td><?php echo $S_name; ?></td> <!-- student name -->

		<?php foreach ($S_arrayMrks as $subject => $marks) { ?>
		
		                                       <!-- no need to subject print  -->
		<td><?php echo $marks; ?> </td>        <!-- print marks  -->
		 

		<?php 
		}
		
		$total = array_sum($S_arrayMrks);
		$per = $total*100/300;

		if(isset($_POST['result_btn'])){
		?>

		<td><?php echo  $total; ?> </td>
		<td><?php echo  number_format($per,2)."%"; ?> </td>
		<?php } ?>
	
	</tr>
	<?php
	} 
	?>
</table>
<br><br>
<form method="post">
<button type="submit" name="result_btn">Calculate Result </button>
</form>
</center>
</body>
</html>