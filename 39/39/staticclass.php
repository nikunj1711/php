<?php

class cyber{
    public static $demo="demo static";

    static function getdata(){
        return "test demo";
    }
}

echo "static method".cyber::getdata()."</br>";
echo "static variable".cyber::$demo."</br>";
?>