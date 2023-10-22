<?php

//配列（丸かっこ）
$a = array(3);
$a[0] = "a.sato"; 
$a[1] = "a.suzuki"; 
$a[2] = "a.takahashi"; 

echo ($a[0])."\n";
echo ($a[1])."\n";
echo ($a[2])."\n";

//配列（角かっこ）

$b = ["b.sato", "b.suzuki", "b.takahashi"];

$b[1] = "b.tanaka";

echo ($b[0])."\n";
echo ($b[1])."\n";
echo ($b[2])."\n";

//多次元配列

$c = [['c.sato', 'c.suzuki'], ['c.takahashi', 'c.tanaka']];

echo ($c[0][0])."\n";
echo ($c[0][1])."\n";
echo ($c[1][0])."\n";
echo ($c[1][1])."\n";

