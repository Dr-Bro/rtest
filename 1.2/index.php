<?php 

$list = [
    [
        'id' => 1,
        'isAllowed' => false
    ],
    [
        'id' => 2,
        'isAllowed' => true
    ],
    [
        'id' => 3,
        'isAllowed' => true
    ],
    [
        'id' => 4,
        'isAllowed' => true
    ],
    [
        'id' => 5,
        'isAllowed' => false
    ]
];


foreach ($list as $arr) {
    # code...
    // $arr['isAllowed'] ? $ar[] = ['id'=>$arr['id']] : 0 ;
    $arr['isAllowed'] ? $ar[] = $arr['id']: 0 ;
}
echo "<pre>";
print_r($ar);
echo "</pre>";

 ?>