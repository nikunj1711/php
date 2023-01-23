<?php

class abc{
    function a(){
        echo "i am the parent method";
    }
}
class xyz extends abc{
    function a(){
        echo "i am the child method";
    }
}
$parent=new abc();
$child=new xyz();
$child->a();

?>