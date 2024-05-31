<?php
class ZipCheck{
    private $str;
    function setStr($str){
        $this->str=$str;
    }
    function getStr(){
        return $this->str;
    }
    //値の確認をゲッターでかいてあげるところから
   function isZip(){
if (preg_match("/^[0-9]{3}-[0-9]{4}$/",$this->str)==1){
    echo "{$this->str}は郵便番号です。<br>";
}else{
    echo "{$this->str}は郵便番号ではありません。<br>";
}
    }
}
$c=new ZipCheck();
$c->setStr("172-0022");
$c->isZip();

$c2=new ZipCheck();
$c2->setStr("1720022");
$c2->isZip();

$c3=new ZipCheck();
$c3->setStr("12345623456");
$c3->isZip();
?>
//いっかいやり直したほうがよさそう！