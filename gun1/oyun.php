<meta charset="UTF-8">
<?php
/**
 * Created by PhpStorm.
 * User: natgho
 * Date: 09.08.2015
 * Time: 19:48
 */

if(!isset($_COOKIE["knm"])){
    setcookie("knm", 5);
}

$knm = $_COOKIE["knm"];

if(isset($_GET["yukari"])){
    if ($knm>0) {
        $knm--;
        setcookie("knm", $knm);
    }

}

if(isset($_GET["asagi"])){
    if ($knm<9) {
        $knm++;
        setcookie("knm", $knm);
    }

}

echo "<a href='?yukari'> yukari</a>";
echo "<table border='1' width='200' height = '200'>";

for ($i = 0; $i < 10; $i++) {
    echo "<tr>";
        echo "<td>";
    if($i==$knm){ echo "A"; }
        echo "</td>";
    echo "</tr>";

}

echo "</table>";

echo "<a href='?asagi'> asagi</a>";


?>