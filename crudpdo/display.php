<?php 
session_start();
require 'pdo_db_con.php';
if(!isset($_SESSION['uname'])){
  //session_destroy();
  header('Location:loginf/login.php');
}

$query = "SELECT * FROM usertbl ORDER BY eno";
$result = $con->query($query);
?>
<!DOCTYPE html>
<html>
<head>
      <title>Manage User </title>
      <link rel="stylesheet" type="text/css" href="style.css?v=<php <?php echo time();?>">
      <link rel="stylesheet" type="text/css" href="cssfont/all.css">
      <link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">
</head>
<body>
  <div class="bg">
	<div class="maindiv">
	<h5 style="margin-top: 20px;" class="bg-dark p-2 text-white"> <!-- list -->Welcome : <?php echo $_SESSION['uname']; ?> </h5>
  <h4 style="margin-top: 20px;">Manage User List</h4>
  <div class="row mt-3" style="margin-left: 1000px;">
      <a href="insert.php" class="btn btn-info mr-4">Add Recored </a>
      <a href="loginf/logout.php" class="btn btn-warning "> logout </a>
      
  </div>


	<div class="cenetrdiv">
  <form method="post" action="delmultreocrd.php"> <!--  -->
	<table class="table table-striped text-center table-bordered table-hover">
		
			 <thead class="thead-dark">
			 	<tr>
          <th><button type="submit" class="btn btn-danger" name="Del_mult">Delete</button></th>
			 		<th>ENO</th>
			 		<th>NAME </th>
			 		<th>Email</th>
                              <th>Gender</th>
                              <th>Dateof brith</th>
                              <th>Mobile No</th>
                              <th>Images</th>
			 		<th colspan="2">opration</th>			 		 
			 	</tr>
			 </thead>


                   <tbody>

                        <?php 

                        foreach($result->fetchAll(PDO::FETCH_ASSOC) as $row) {
                        ?>
                          
                         
                        
                         
                         <tr>
                              <td>

                                <input type="checkbox" name="mult_del_chck[]" value="<?php echo $row['eno']; ?>">

                              </td>

                              <td><?php echo $row['eno']; ?></td>
                              <td><?php echo $row['name']; ?> </td>
                              <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['gender']; ?></td>
                              <td>
                                <?php echo date('d-m-Y',strtotime($row['dob']));?>
                              </td>
                              <td><?php echo $row['mobile']; ?></td>
                              <td>

                                    <!-- <?php //echo $row['image']; ?> -->
                        <img src="<?php echo "upload/".$row['image']; ?>" width="50px" height="50px" style="border-radius: 50%;">
                              </td>

                                    <!-- <i class='fa fa-edit'></i>
                                    <i class='fa fa-trash'></i> -->

            <td><a href="update.php?id=<?php echo $row['eno']; ?>" class="btn btn-warning"> Edit  </a></td>    

            <td><a href="delete.php?id=<?php echo $row['eno']; ?>&&img=<?php echo $row['image']; ?>" class="btn btn-danger"> Delete </a></td>                   
                        </tr>

                        <?php
                        }

                        ?>

                   </tbody>
 
 
 </div>
</div>
</table>
  </form>  
</div>
 <script src="bs/js/jgru.js"></script>
<script src="bs/js/bootstrap.js"></script>

 
 
</body>
</html>

