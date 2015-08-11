<?php
/**
 * Created by PhpStorm.
 * User: natgho
 * Date: 08.08.2015
 * Time: 16:16
 */
$a = ( integer ) 22;
echo $a ." " . gettype($a);
settype($a, "string" );
echo $a ." " . gettype($a);
?>