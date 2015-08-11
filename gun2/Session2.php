<?php session_start();

/**
 * Created by PhpStorm.
 * User: natgho
 * Date: 10.08.2015
 * Time: 11:20
 */
//Session başlatmak için kullanılan komuttur
echo $_COOKIE["y"];
echo $_SESSION["x"];
//session_destroy(); //Sessionlar ile işlem bitince sessionların bitmesini sağlayan komuttur.
//session_unregister("x");
echo $_SESSION["x"];
/**
 *  Sessionların cookiden yegane farkı cookiler bilgisayarda tutulup
 * değiştirilebiliyorken session'lar server da tutulur ve kullanıcı tarafından değiştirilemezler.
 * Eğer tarayıcıyı kapatırsanız sessionlar silinir.
 */

?>


