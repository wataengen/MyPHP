<?php
for($i=0; $i <= 4; $i++) {
    echo $i. "\n";
}

for($i=0; $i <= 4; $i++) {
    if ($i == 3) {
        break;
    }
    echo $i. "\n";
}
for($i=0; $i <= 4; $i++) {
    if ($i == 3) {
        continue;
    }
    echo $i. "\n";
}

for($i=0; $i <= 2; $i++) {
    for($j=0; $j <= 2; $j++) {
        echo $i. '-'.$j. "\n";
    }
}

$arr = [2, 4, 6, 8, 10];
$sum = 0;

for($i=0; $i <= 4; $i++) {
    $sum += $arr[$i]. "\n";
}
echo $sum. "\n";
