<?php 


// ***********  1,2,3,4  ************* 


class Student{

	// public  $fullname = "Nikunj";
	// public	$course = "Msc(CA & IT)";
	// public	$specialty = "Web Dev";
	// public	$university = "Ganpat ";
	// public	$email = "macnikunj2001@gmail.com";
	// public	$phone = "987463210";

		private $fullname; 
		private	$course;
		private	$specialty;
		private	$university;
		private	$email;
		private	$phone;

		// construct
		function __construct($fname){
			 echo "fullname is :".$this->fullname = $fname;
			 echo "<br>";
		}


		// Method for displuing
		function displaying($cou,$spec,$university,$email,$phone){
			$this->course = $cou;
			$this->specialty = $spec;
			$this->university = $university;
			$this->email = $email;
			$this->phone = $phone;

			echo "course : ".$cou;echo "<br>";
			echo "specialty : ".$spec;echo "<br>";
			echo "university : ".$university;echo "<br>";
			echo "email : ".$email;echo "<br>";
			echo "phone : ".$phone;echo "<br>";
			echo "<br>";
		}

}

//$obj = new Student('Rahul makwana');
//echo "<br>";
//echo $obj->fullname."<br>";
// echo $obj->course;

//$obj = new Student();
//echo "<br>";
//echo $obj->fullname."<br>";
//echo $obj->course;

//displaying

echo "<h3>";


$stud1 = new Student('Rahul makwana');

echo $stud1->displaying('Msc(CA & IT)','web dev','Ganpat university','nikunj@gmail.com','9876543210');

$stud2 = new Student('Rahul makwana');
echo $stud2->displaying('MCA','web dev','HNGU','rahul@gmail.com','7744332211');



echo "</h3>";



// ***********  2  ************* 


// class Mobile{
// 	public $modal;
// 	//method
// 	function showmodale($number){
// 		$this->modal = $number;
// 		$modal = $number;
// 		echo "modal Number :".$modal;
// 	}
// }

// $show = new Mobile();
// echo $show->showmodale(12346);


// ***********  5,  *************



interface IAnimal {

	function talk(); 
}

// class Cat implements IAnimal
// {
// 	function talk(){
// 		echo "muaw......";
// 	}
// }

abstract class Cat implements IAnimal{
	 abstract function printInfo();
	 function talk(){
  		echo "Cat is muaw......";
  	}
  		//echo "This is a Cat abstract mehod ";
}






class Dog implements IAnimal
{
	function talk(){
		echo "Dog is Jaff......";
	}
}









class Kitten extends Cat implements IAnimal{

	function talk(){
		echo "Kitten is muaw......";
	} 
	function printInfo(){
		echo "This is implements About Kitten";
	}

}


class Tomcat extends Cat implements IAnimal{

	function talk(){
		echo "Tomcat is muaw......";
	} 
	function printInfo(){

		echo "This is implements About Kitten";
	 
	}

}







 //$objcat = new Cat();

 $objKitten = new Kitten();

 echo $objKitten->printInfo();

 $objTomkat = new Tomcat();

 $objDog = new Dog();

 // $objcat->talk();
 //  echo "<br>";
 // $objKitten->talk();
 //  echo "<br>";
 // $objTomkat->talk();
 //  echo "<br>";
 $objDog->talk();


// $objdog = new Dog();
// $objdog->talk();

// class TestAnimals implements IAnimal{ 

// 	   public $k;
// 	   public $tc;
// 	   public $d;
// 	   $k= $objKitten;
// 	   $tc=$objTomkat;
// 	   $d=$objDog;


// 	  private $animals = array('$objKitten','$objTomkat','$objDog');

	  

// 	  //echo "<h3>";

// 		  foreach($animals as $animal) {
// 		  $animal->talk();
// 		  echo "<br>";
// 		  }

//      // echo "</h3>";
// }


//$TestAnimalsObj = new TestAnimals();

//echo  $TestAnimalsObj;

// class TestAnimals implements IAnimal{ 

// 	private $animals = array();

// 	$this->animals = array('$objKitten', '$objTomkat','$objDog');

// }


//$TestAnimalsObj = new TestAnimals();

//echo  $TestAnimalsObj;

 $animals = array($objKitten, $objTomkat,$objDog);

 echo "<h3>";

 foreach($animals as $animal) {
  $animal->talk();

  echo "<br>";
	}
 echo "</h3>";

?>