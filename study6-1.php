<?php
class Person{
    private $name;
    private $age;
    private $sex;

function __construct($name,$age,$sex){
    $this->name=$name;
    $this->age=$age;
    $this->sex=$sex;

}
function show(){
    echo "{$this->name}({$this->age}歳)性別：{$this->sex}";
}
}
$p1=new Person("カフカ",32,"女");
$p2=new Person("穹",1,"男");
$p3=new Person("クラーラ",12,"女");

$p1->show();
$p2->show();
$p3->show();



?>