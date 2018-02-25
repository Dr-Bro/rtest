<?php 

$list = [
    [
        'sort' => 455
    ],
    [
        'sort' => 21
    ],
    [
        'sort' => 852
    ],
    [
        'sort' => 16
    ],
    [
        'sort' => 5
    ]
];


usort($list,function ($a, $b) { return $a['sort'] <=> $b['sort'];});

echo "<pre>";
print_r($list);
echo "</pre>";




 ?>