<?php

abstract class xyz{

    abstract function getdata($a);

    function getdatanew(){
        return "i am abstract call implement method";
    }
}

class pqr extends xyz{

    function getdata($a){
        return $a;
    }
}

$b=new pqr();

echo "get value :" .$b->getdata("php")."</br>";
echo "get value :" .$b->getdatanew(). "</br>";
?>