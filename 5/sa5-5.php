<?php
$str ="HTMLとPHPの学習";
echo "\$str=「{$str}」<br><br>";
$length=mb_strlen($str);
echo "\$strの長さは{$length}文字です。<br>";

$sub = mb_substr($str,5,3);
echo "\$strの5文字目から3文字目を切り取ると「{$sub}」です。<br>";
$srch = "学習";
$result =mb_strpos($str,$srch);
echo "「{$srch}」は\$strの{$result}文字目に含まれます。<br>";
$srch="HTML";
$replace="Web";
$result=str_replace($srch, $replace,$str);
echo "\$strの「{$srch}」を「{$replace}」に変更すると「{$result}」になります";

?>