<?php
$x = 10;
$x = 2;
echo $x ;
echo "<br>";

$a =20;
$a +=5;
echo $a;
echo "<br>";

$b =20;
$b -=5;
echo $b;
echo "<br>";

$c =20;
$c /=5;
echo $c;
echo "<br>";

$d =20;
$d %=5;
echo $d;
echo "<br>";

$e =20;
$e .=5;
echo $e;
echo "<br>";
echo "<br>";
echo "<br>";

echo "operator logika :";
echo "<br>";
echo "<br>";
var_dump(1 < 5) ;
echo "<br>";

var_dump(1 > 5) ;
echo "<br>";

var_dump(1 <= 5) ;
echo "<br>";

var_dump(1 >= 5) ;
echo "<br>";

var_dump(1 == 5) ;
echo "<br>";

var_dump(1 != 5) ;
echo "<br>";
echo "<br>";
echo "<br>";

echo "operator identitas :";
echo "<br>";
echo "<br>";
var_dump(1 === "1");
echo "<br>";
var_dump(1 !== "1");
echo "<br>";
echo "<br>";
echo "<br>";

echo "operator logika :";
echo "<br>";
echo "<br>";
$x = 10;
var_dump($x < 10 && $x % 2 == 0);
echo "<br>";
$x = 10;
var_dump($x < 10 || $x % 2 == 0);



?>