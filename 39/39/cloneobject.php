<?php
class address{
    var $city="patan";
    var $pin="123456";
    function setaddr($arg1,$arg2){
        $this->city=$arg1;
        $this->pin=$arg2;
    }
}
class myclass{
    var $name="bapu";
    var $obj;

    function setname($arg){
        $this->name=$arg;
    }
}
$obj1=new myclass();
$obj1->obj=new address();
echo"<p><i><h1>--------------------Origanal object--------------------<br></i></h1></p>";
echo"<br>";
print_r($obj1);
$obj2=clone $obj1;
$obj1->setname("riya");
$obj1->obj->setaddr("surat","987654");
echo"<br>";
echo"<p><i><h1><br>--------------------After change--------------------<br></h1></p>";
echo"<h3><br>original object:<br></i></h3>";
print_r($obj1);
echo"<i><h3><br>cloned object:<br></h3></i>";
print_r($obj2);
?>
<html>
    <head>
        <style>
            h1{
                color:red;
            }
            h3{
                color:blue;
            }
        </style>
    </head>
</html> 