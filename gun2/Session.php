<?php
/**
 * Created by PhpStorm.
 * User: natgho
 * Date: 10.08.2015
 * Time: 11:18
 */
session_start();
$t = base64_encode("bu denemedir"); //Base 64 ile istemileni şifreleme.
echo base64_encode("bu denemedir");
$t = base64_decode($t); // Base 64 ile istenileni çözme
echo $t;
setcookie("y",15);
$_SESSION["x"] = 1;
echo $_SESSION["x"];
?>