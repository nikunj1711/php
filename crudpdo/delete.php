<?php 
  require 'pdo_db_con.php';
  $eno = $_GET['id'];

  $stud_img = $_GET['img'];

  $query  = "DELETE FROM  usertbl WHERE eno ='$eno'";

  $result = $con->query($query);



  if($result){

  	//	unlink("upload/".$stud_img);

  //	header('Location: display.php');
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




<!-- header('Location: addroom.php'); -->