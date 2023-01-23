<?php

class xyz{
    var $name;

    function getname($a){
        $this->name=$a;

        echo $this->name;
    }
}
$a=new xyz();
$a->getname("ajay");
?>