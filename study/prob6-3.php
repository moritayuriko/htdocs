<?php
class ZipCheck
{
    private $extension = "/^[0-9]{3}-[0-9]{4}$/";
    private $str;
    //ラベル張り兼インスタンスの初期化
    function __construct($str)
    {
        $this->str = $str;
    }

    function isZip()
    {
        if (preg_match($this->extension, $this->str) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function getStr()
    {
        return $this->str;
    }
}
$c = new ZipCheck("172-0022");
$banngou = $c->getStr();
if ($c->isZip() == true) {
    echo "{$banngou}は郵便番号です。<br>";
} else {
    echo "{$banngou}は郵便番号ではありません。<br>";
}
