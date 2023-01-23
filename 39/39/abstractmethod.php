<?php

abstract class abc{
    var $a;
    abstract function getvalueA($a);
}

class xyz extends abc{

    function getvalueA($aa){
        $this->a=$aa;
    }
    function putvalueA(){
        echo $this->a;
    }
}
$obj=new xyz();
$obj->getvalueA("rk");
$obj->putvalueA();
?>