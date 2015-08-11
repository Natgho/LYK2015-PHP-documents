<meta charset="UTF-8">
<?php
/**
 * Created by PhpStorm.
 * User: natgho
 * Date: 09.08.2015
 * Time: 10:07
 */
$sifre = "1234";
$girilen_sifre="1234";

if($sifre == $girilen_sifre)
{
    echo "<b style = 'color:green'>  çalıştı</b>";
}
else
{
    echo "şifre yanlış";
}


$say1=15;
    $say2=20;
        $say3=25;

echo $say2 > $say3 ? "say2 uyuktur" : "say3 buyuktur" ; //İf'in kolay kullanımı

#if else if kullanımı
#echo max($say1,$say2,$say3); Büyük sayıyı bul.
if($say1>$say2 && $say1>$say3)
{
    echo $say1 . "buyuk olan sayı";
}elseif($say2>$say3 && $say2>$say1)
{
    echo $say2 . "Buyuk olan sayı";
}else
{
    echo "<br/>" . $say3 ." buyuk olan sayı";
}
?>