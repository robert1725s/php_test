<?php
$people = [
    [
        "name" => "Taro",
        "age" => 25,
        "gender" => "男性"
    ],
    [
        "name" => "Jiro",
        "age" => 20,
        "gender" => "男性"
    ],
    [
        "name" => "hanako",
        "age" => 16,
        "gender" => "女性"
    ]
];

foreach ($people as $person) {
    echo $person["name"] . "(" . $person["age"] . "歳" . $person["gender"] . ")<br />";
}
