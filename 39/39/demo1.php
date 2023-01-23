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
echo "origanal object:<br>";
print_r($obj1);
$obj2=clone $obj1;
$obj1->setname("riya");
$obj1->obj->setaddr("surat","987654");
echo "after change:<br>";
echo "original object:<br>";
print_r($obj1);
echo "cloned object:<br>";
print_r($obj2);

?>