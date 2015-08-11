<meta charset="UTF-8">
<?php
/**
 * Created by PhpStorm.
 * User: natgho
 * Date: 09.08.2015
 * Time: 12:01
 */

//Array oluşturma
$bilgiler = array(
    array("ad" => "Sezer",
        "soyad "=> "Bozkır",
        "Yaş" => "21"),
    array("ad" => "İlker",
            "soyad" => "epik"));
//Modern tarzda array oluşturma
    $bilgiler2 = [
        ["ad" => "Sezer",
            "soyad "=> "Bozkır",
            "Yaş" => "21"],
        ["ad" => "İlker",
            "soyad" => "epik"]];

$encode = json_encode($bilgiler); //Json formatında encode etme
echo $encode;
$decode = json_encode($bilgiler); //Json formatında decode etme
echo $decode;
#var_dump($bilgiler);
echo "<hr />";
print_r(json_decode($encode,true)); //Decode sırasında class hale getirme

echo count($bilgiler); //Array'i saydırma

$a = "a";
echo ++$a; //Otomatik olarak bir sonraki harfe geçiş yapıyor.
?>


