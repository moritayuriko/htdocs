<?php
function job($syokugyou = "会社員"){
    return "職業は{$syokugyou}です。<br>";
}
echo job("公務員");
echo job();
?>