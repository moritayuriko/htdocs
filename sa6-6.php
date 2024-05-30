<?php
class Calc{
   protected $num1;
   protected $num2;
   function setNumbers($num1,$num2){
      $this->num1=$num1;
      $this->num2=$num2;
   }
   function add(){
      $ans =$this->num1+$this->num2;
      echo "{$this->num1}+{$this->num2}={$ans}<br>";
   }
   function sub(){
      $ans=$this->num1-$this->num2;
      echo "{$this->num1}-{$this->num2}={$ans}<br>";
   }
}
class CalcEX extends Calc{
   function mul(){
      $ans = $this->num1*$this->num2;
      echo "{$this->num1}×{$this->num2}={$ans}<br>";
   }
   function div(){
      $ans=$this->num1/$this->num2;
      echo "{$this->num1}÷{$this->num2}={$ans}<br><br>";
   }
}
$calc = new CalcEX();
$calc->setNumbers(12,3);
$calc->add();
$calc->sub();
$calc->mul();
$calc->div();

$calc2 = new CalcEX();
$calc2->setNumbers(47,3);
$calc2->add();
$calc2->sub();
$calc2->mul();
$calc2->div();
?>