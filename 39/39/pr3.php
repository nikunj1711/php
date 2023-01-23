<?php

class stud{
    var $booktitle;
    var $bookprice;

    function __construct($title,$price){
        $this->booktitle = $title;
        $this->bookprice = $price;
    }
    function getbooktitle(){
        return $this->booktitle;
    }
    function getbookprice(){
        return $this->bookprice;
    }
}

$f=new stud("java",450);
echo "<h3> my booktitle is : " .$f->getbooktitle(). "</h3>";
echo "<h3> my bookprice is : " .$f->getbookprice(). "</h3>";
?>