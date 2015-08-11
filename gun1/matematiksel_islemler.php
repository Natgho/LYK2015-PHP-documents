<?php
/**
 * Created by PhpStorm.
 * User: natgho
 * Date: 08.08.2015
 * Time: 16:48
 */
$say1 = 10;
$say2 = 15;

echo $say1 + $say2;
echo "<br/>";
echo $say1 - $say2;

#Sayı yuvarla
echo "<br/>";
echo "<br/>";
echo "floor ve ceil:";
echo "<br/>";
echo floor($say1 / $say2) . "<br/>";
echo ceil($say2 / $say1);
echo "<br/>";
echo "<br/>" . "kalan:";
echo $say1 % $say2;

?>