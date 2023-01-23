<?php

class abc{
    var $a=10;
    public $b="this is public";
    private $c="this is private";
    protected $d="this is protected";
    
    public function iterate(){
        foreach($this as $key=>$value){
            print "$key=>$value\n";
        }
    }
}

$obj =  new abc();
echo "\n object iteration";
foreach($obj as $key=>$value){
    print "<br>$key=>$value";
}
echo "<br>using iterate function";
$obj->iterate();
?>