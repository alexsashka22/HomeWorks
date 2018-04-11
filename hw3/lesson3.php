<?php
$countries = [
    'Russia' => ['Москва', 'Рязань'],
    'USA' => ['Нью Йорк', 'Вашингтон'],
];
foreach ($countries as $country => $cities) {
    foreach ($cities as $city) {
        echo $country . ' - ' . $city . PHP_EOL;
    }
}
$data = ['Зеленое яблоко', 'Желтая груша', 'Синий баклажан'];

$colors = $products = [];

foreach($data as $value)
    list($colors[], $products[]) = explode(' ', $value);

shuffle($colors);

foreach($colors as $key=>$color)
    echo "{$color} {$products[$key]}" . PHP_EOL;
