<?php 


class Stud {

	public $fullname = "Nikunj Makwana";
	public $cource = "Msc(CA &IT)";
	public $spec = "WEB DEV";

	
	function __construct ($fullname){
		echo $fullname;
	}

		function myPrint () {
		echo $this->bar;
		}

}

$myFirstObject = new Stud;
$myFirstObject->myPrint(); 

?>