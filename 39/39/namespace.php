<?php

namespace abc\abc1;
function hello(){
    echo "hello world from abc1<br><br>";
}
namespace abc\abc2;
function hello(){
    echo "hello world from abc2<br>";
}
use abc\abc1;
abc1\hello();
use abc\abc2;
abc2\hello();

?>