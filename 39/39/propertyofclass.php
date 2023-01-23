<?php

class abc{
    var $a=10;
    private $b=20;
    protected $c=30;

    private function getvalue_a(){
        return $this->a;
    }

    public function getvalue_b(){
        return $this->b;
    }

    protected function getvalue_c(){
        return $this->c;
    }
}

class xyz extends abc{
    function use_protected(){
        return parent::getvalue_c();
    }
}

$aa=new xyz();

echo  $aa->getvalue_b() ."<br>" ;
echo $aa->use_protected();

?>