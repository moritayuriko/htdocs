<?php
require_once("abslist.php");
class UlList extends AbsList
{
    function startList()
    {
        echo "<ul>\n";
    }
    //\nは改行
    function endList()
    {
        echo "</ul>\n";
    }
}
