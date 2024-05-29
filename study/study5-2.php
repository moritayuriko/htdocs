<?php
function match_zip($zip)
{
    if (preg_match("/^[0-9]*|0$/", $zip) == 1) {
        echo "{$zip}は整数です。<br>";
    } else {
        echo "{$zip}は整数ではありませぬ。<br>";
    }
}
    match_zip("abc");
    match_zip("-1");
    match_zip("1710022");
    match_zip("0");

?>