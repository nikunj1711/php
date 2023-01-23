<?php 



class School{

	private $classes;
	private $Student;
	private $Teacher;
	private $Discipline;

	function __construct(){
		echo "<br>";
		echo "This is Our school ";
		echo "<br>";
	}

}


class Classes extends School{
		private $c1;
		private $c2;
}

class Teacher extends School{
	
	private $nametech1;
	private $nametech2;
	
}

class mscit extends Classes{
	 private $classname;
}



class Student extends mscit{
		private $cllno;
		private $name;
}


class Discipline extends School{
	 private $nameofDicpine;
	 private $nooflech;
	 private $noofExe;
}


 
// class Student extends School
// {
//    	 function __construct(){
//    	 	parent::__construct();
// 		echo "<br>";
// 		echo "This is Student ";
// 		echo "<br>";
// 	}
// }


$obj = new Student();


?>