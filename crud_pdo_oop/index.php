


<?php 
  require 'db-utils.class.php';

// $query = "SELECT * FROM usertbl";
// $result = $con->query($query);

$obj = new DBUtils();

if(isset($_GET['eid'])){

  $editid = $_GET['eid'];
  $obj->displaydataByid($editid);

}

//$obj->getAllMessages();


?>
<!DOCTYPE html>
<html>
<head>
      <title>STUDENT DATA </title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="cssfont/all.css">
      <link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">


 
</head>
<body>
 
       <div class="bg">
	<div class="maindiv">
	<h1 style="margin-top: 20px"> MESSAGE BORD </h1>
      <a href="add-message.php" class="btn btn-info btnc">Add Message </a>
	<div class="cenetrdiv">
	<table class="table table-striped text-center table-bordered table-hover">
		
			 <thead class="thead-dark">
			 	<tr>
			 		<th>Id</th>
			 		<th>author Name </th>
          <th>Subject </th>
			 		<th>Message Date </th>
          <th>Message Body</th>
                             
			 		<th colspan="2">opration</th>			 		 
			 	</tr>
			 </thead>

       <tbody>
         
       
            <?php 
               foreach ($obj->getAllMessages() as $row) {

              ?>
                    <tr>
                     <td><?php echo $row['id']; ?></td>
                     <td><?php echo $row['author']; ?></td>
                     <td><?php echo $row['subject']; ?></td>
                     <td><?php echo date('d-m-Y',strtotime($row['msgDate'])); ?></td>
                     <td style="width: 250px;"><?php echo $row['msgBody']; ?></td>

            <td><a href="edit-message.php?eid=<?php echo $row['id'];  ?>"> <button class="btn btn-warning">Edit</button> </a></td>      
            <td><a href="delete.php?id=<?php echo $row['id']; ?>"> <button class="btn btn-danger">Delete</button></a></td>  
         </tr>

          <?php
                
                }
                ?>
       </tbody>
                  
 
 
 </div>
</div>
</table>
</div>
 <script src="bs/js/jgru.js"></script>
<script src="bs/js/bootstrap.js"></script>

 
 
</body>
</html>