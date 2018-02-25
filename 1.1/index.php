<?php 

$list = [
    ['number' => 3],
    ['number' => 2],
    ['number' => 45],
];



echo "<pre>";
print_r (list($a,$b,$c) = $list);
$res = array_sum($a)+array_sum($b)+array_sum($c);
print_r($res);
echo "</pre>";


 ?>