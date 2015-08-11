<?php
/**
 * Created by PhpStorm.
 * User: natgho
 * Date: 09.08.2015
 * Time: 11:21
 */
$a =10;
switch($a) {
    case 1:
        break;
    default:
        echo "bas";
}
for ($i =0 ; $i<10 ; $i++)
{
    echo "yaz";
    if ($i == 4) {
        break 1;
    }
}
?>