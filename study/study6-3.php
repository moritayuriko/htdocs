<?php
require_once("abslist.php");
class NumList extends AbsList
{
    function startList()
    {
        echo "<ol>\n";
    }
    //\nは改行
    function endList()
    {
        echo "</ol>\n";
    }
}
