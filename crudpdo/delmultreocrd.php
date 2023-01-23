
<?php 
require 'pdo_db_con.php';

if(isset($_POST['Del_mult'])){

  $all_id = $_POST['mult_del_chck'];
  $extract = implode(',',$all_id);

  //echo $extrac

  $query = "DELETE FROM usertbl WHERE eno IN($extract)";

   $result = $con->query($query);


	?> 
	<script> alert('Record deleted Succefully..'); </script> 
	<?php  
	?>
	 <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/msc(CA&IT)/PDO_CRUD/display.php"> 
	<?php 
	}
	else{
	echo "DElete NOT Complted ";
	}

?>