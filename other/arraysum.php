<?php
$multi_array = [
    ["val1"=>10,"val2"=>20,"val3"=>30,"val4"=>40,"val5"=>50],

    ["val1"=>10,"val2"=>20,"val3"=>30,"val4"=>40,"val5"=>50],

    ["val1"=>60,"val2"=>70,"val3"=>80,"val4"=>90,"val5"=>100],

    ["val1"=>60.5,"val2"=>70.5,"val3"=>80.5,"val4"=>90.5,"val5"=>100.5]
];

$sum_array = array();
foreach ($multi_array as $k=>$sub_array) {
  foreach ($sub_array as $id=>$val) {
    $sum_array[$id]+=$val;
  }
}
print "Sum of full Array : ".array_sum($sum_array)."<br/>";
?>