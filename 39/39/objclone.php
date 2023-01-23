<?php

class animals{
    public $name;
    public $category;
}

$objanimals=new animals();
$objanimals->name="lion";
$objanimals->category="wild animals";
$objcopied=$objanimals;
$objcopied->name="cat";
$objcopied->category="pet animals";

print_r($objanimals);
echo "<br>";
print_r($objcopied);

?>