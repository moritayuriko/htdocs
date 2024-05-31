<?php
class City{
    private $name;
    function setName($name){
        $this->name=$name;
    }
    function getName(){
        return $this->name;
    }
    private $prefecture;
    function setPrefecture($prefecture){
        $this->prefecture=$prefecture;
    }
    function getPrefecture(){
        return $this->prefecture;
    }
}
$c=new City();
$c->setName ("横浜市");
$c->setPrefecture("神奈川県");
echo "{$c->getName()}は{$c->GetPrefecture()}にあります。<br>";
$c2=new City();
$c2->setName ("日本");
$c2->setPrefecture("地球");
echo "{$c2->getName()}は{$c2->GetPrefecture()}にあります。<br>";
?>