<?php
// 配列の基本型
$child1 = [
    'name' => 'Mike',
    'age' => 8,
    'hobby' => 'Games'
];

// 連想配列
$family = [
    "Bob" => [
        "height" => "120cm",
        "weight" => "26kg"
    ],
    "Tom" => [
        "height" => "110cm",
        "weight" => "20kg"
    ]
];

echo $family["Bob"]["height"]; //120cm