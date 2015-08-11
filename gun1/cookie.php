<meta charset="UTF-8">
<?php
/**
 * Created by PhpStorm.
 * User: natgho
 * Date: 09.08.2015
 * Time: 16:33
 */
$user = "admin";
$pass = "12345";

//echo time();
$zaman = 1439138562 - (24*60*60);
var_dump(getdate($zaman));
if(isset($_GET["islem"]))
{
    unset($_COOKIE["kullanici"]);
    setcookie("kullanici","", time()-3600);

}

if (isset($_POST["ad"])) {
    if (empty($_POST["ad"]) OR empty ($_POST["sifre"]))
    {
        echo "kullanıcı adın yda şifren boş, doldurda gel";
    }else{
        if ($_POST["ad"]== $user && $_POST["sifre"]== $pass) {
            setcookie("kullanici", $_POST["ad"]);
        }
        echo "işlemler gerçekleştirildi.";
    }

}

if (isset($_COOKIE["kullanici"])) {
    echo "hosgeldiniz sayın ". $_COOKIE["kullanici"];
    echo "<a href='?islem=cikisyap'>cikis yap</a>";
}
else
{
    echo '
    <form action="" method="post">
    <input type="text", name="ad">
    <input type="password", name="sifre">
    <input type="submit", value="gonder">
    <form/>
    ';

}
?>