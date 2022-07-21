<?php

error_reporting(E_ALL);
/*
**Dizi Fonksiyonları 1**
print_r()
    Bir değişkenin veya dizinin gösterimini ekrana basar.

var_dump()
    Bu işlev bir değişkenin türü ve değeri dahil değişkenle
    ilgili bilgileri gösterir.Diziler ve nesneler ardışık olarak
    bileşenlerine ayrılarak tüm yapısı değerleriyle birlikte gösterilir.

explode()
    Bir dizgeyi bir ayraca göre bölüp bir dizi haline getirir.

implode()
    Dizi elemanlarını birleştirip bir dizge elde eder.

count()
    Bir dizideki eleman sayısını veya bir nesnedeki şeylerin sayısını döndürür.

is_array()
    Değişkenin bir dizi içerip içermediğine bakar.
*/


$arr=[1,2,3,4,5,6,7,8,9];

echo "<pre>";
print_r($arr);
echo "<br><br>";
var_dump($arr);
echo "<br><br>";
$boyut=count($arr);
echo $boyut;
echo "<br><br>";
$is_full=is_array($arr);
echo $is_full;
echo "<br><br>";

$dizge = implode('<=>',$arr);

print_r($dizge);
echo "<br><br>";

$newArr=explode('<=>',$dizge);

print_r($newArr);







?>