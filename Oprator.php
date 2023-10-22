<?php
$x = 10;
$y = 2;
$z = 10;

//数値演算子
echo($x + $y)."\n";
echo($x - $y)."\n";
echo($x * $y)."\n";
echo($x / $y)."\n";
echo($x % $y)."\n";

//関係演算子
echo($x > $y)."\n";
echo($x < $y)."\n";

echo($x <= $y)."\n";
echo($x <= $z)."\n";

echo($x == $y)."\n";
echo($x != $y)."\n";

//論理演算子
$a = 8;
$b = 3;

echo ($a >= 5 && $a <= 10)."\n";
echo ($b >= 5 && $b <= 10)."\n";

echo ($a == 3 || $b == 3)."\n";
echo ($b == 1 || $b == 1)."\n";

//代入演算子

$c = 8;
$d = 12;
$e = 20;

echo ($c += 10)."\n";
echo ($e += $d)."\n";

//インクリメント、デクリメント
$i = 8;
$q = 8;

$i++;
$q--;

echo ($i)."\n";
echo ($q)."\n";


