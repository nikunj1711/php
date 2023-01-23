<?php
class animal{
    public $name;
    public $category;
}
$objanimal=new animals();
$objanimal->name="lion";
$objanimal->category="wild animal";
$objcopied=$objanimal;
$objcopied->name="cat";
$objcopied->category="pet animal";
print_r($objanimal);
echo "<br>";
print_r($objcopied);

?>