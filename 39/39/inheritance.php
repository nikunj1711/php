<?php

class book{
    var $price;

    function setprice($par){
        $this -> price = $par;
    }
    function getprice(){
        echo $this -> price ."</br>";
    }
}

class noval extends book{
    var $publisher;

    function setpublisher($par){
        $this -> publisher = $par;
    }
    function getpublisher(){
        echo $this -> publisher . "</br>";
    }
}
$abc = new book;
$xyz = new noval;

$abc -> setprice("555");
$abc -> getprice();

$xyz -> setpublisher("hello");
$xyz -> getpublisher();
$xyz -> setprice("10000");
$xyz -> getprice();

?>