<?php
class Person{
    private $name;

    function setName($name){
        $this->name=$name;
    }
    function getName(){
        return $this->name;
    }
}
    $p= new Person();
    $p->setName("都手茂合歓伊");
    echo "名前：{$p->getName()}";
?>