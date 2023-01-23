<?php

class xyz{
    function a(){
        echo "i am method";
    }
    function __construct(){
        echo "i am constructor <br>";
    }
}
$obj=new xyz();
$obj->a();
?>