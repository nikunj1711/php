<?php
class DBUtils{

	private $dsn;
	private $db_user;
	private $db_password;
	 

	public function dbConnect(){

		$this->dsn = "mysql:host=localhost; dbname=messages;";
		$this->db_user = "root";
		$this->db_password = "";

		$con = new PDO($this->dsn,$this->db_user,$this->db_password);
		// if($this->con){
		// 	echo "D";
		// }
		// echo "Connected.....";
		return $con;
	}

	public function getAllMessages(){

		$sql = "SELECT * FROM messages";
		$result = $this->dbConnect()->query($sql);
		return $result;
		// while ($row=$result->fetchAll(PDO::FETCH_ASSOC)) {

		// 	    //echo "<pre>";
		// 		// print_r($row);
		// 		//echo $row[0]['id'];
		// }
	}

	function addMessage($post){

		//$name = $post['name'];
		$aname = $post['auname'];

		$msdate = date('Y-m-d', strtotime($post['msgdate']));
		$submsg = $post['subject'];
		$msgBody = $post['msgBody'];

		$sql = "INSERT INTO messages (author,subject,msgDate,msgBody) VALUES ('$aname','$submsg','$msdate','$msgBody')";

		$result = $this->dbConnect()->query($sql);
		if($result){
    	echo "<script> alert('row INSERTED');</script>";
	    }
	    else{
	    	echo "<script> alert('ROW NOT INSERTED');</script>";
	    }
		return $result;


	}



	function displaydataByid($editid){

		$sql = "SELECT * FROM messages WHERE id='$editid'";
		$result = $this->dbConnect()->query($sql);
		$row = $result->fetchAll(PDO::FETCH_ASSOC);
		return $row;

	}

	function updateMessage($post,$editid){

		$upname = $post['uuname'];
		$upmsdate = date('Y-m-d', strtotime($post['umusgdate']));
		$upsubmsg = $post['usubject'];
		$upmsgBody = $post['umsgBody'];

		$sql = "UPDATE messages SET author='$upname', subject='$upsubmsg',msgDate='$upmsdate',msgBody='$upmsgBody' WHERE id='$editid' ";
		$result = $this->dbConnect()->query($sql);

		if($result){
    	echo "<script> alert('row UPDATED');</script>";
	    }
	    else{
	    	echo "<script> alert('ROW NOT UPDATED');</script>";
	    }
		return $result;

	}

	function deleteMessageById($msg_id){

		  $idd = $msg_id['id'];
 		  $query  = "DELETE FROM  messages WHERE id ='$idd'";
 		  $result = $this->dbConnect()->query($query);
  		   
  		  if($result){
			?> 
			<script> alert('Record deleted Succefully..'); </script> 
			<?php  
			?>
			 <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/msc(CA&IT)/oops/Messagebord/index.php"> 
			 <?php 
			}
			else{
			echo "DElete NOT Complted ";
		    }

		    return $result;
	}

}


?>