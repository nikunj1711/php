<?php

class xyz{
    function a(){
        echo "i am parent method <br>";
    }
}
class abc extends xyz{
    function b(){
        echo "i am the child method";
    }
}
$obj=new abc();
$obj->a();
$obj->b();

?>