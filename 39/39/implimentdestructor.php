<?php

class xyz{
    function a(){
        echo "i am method <br>";
    }
    function __destruct(){
    echo "i called outomatically at the end of execution";
    }
}
$obj=new xyz();
$obj->a();

?>