<?php
/**
 * Created by PhpStorm.
 * User: natgho
 * Date: 10.08.2015
 * Time: 10:27
 */
if (!isset($_COOKIE["knm"]))
{
    setcookie("knm",5);
}
$knm = $_COOKIE["knm"];

if (isset($_GET["islem"]))
{
    if ($_GET["islem"] == "yukari")
    {
        if ($knm>0)
        {
            $knm--;
            setcookie("knm",$knm);
        }
        else
        {
            $knm = 10;
        }

    }
    else if ($_GET["islem"] == "asagi")
    {
        if ($knm<9)
        {
            $knm++;
            setcookie("knm",$knm);
        }
        else
        {
            $knm = 1;
        }
    }
}
echo "<a href='?islem=yukari'>Yukari</a>";
echo "<a href='?islem=asagi'> Asagi</a>";
echo "<center><table border='1' width='50' height = '300'>";
for ($i=0;$i<10;$i++)
{
    echo "<tr><td>";
    if($knm == $i)
    {
     echo "A";
    }
    echo "</tr></td>";
}
echo "</table>";
echo "<br/><br/><br/>". $knm . "</center>";

?>