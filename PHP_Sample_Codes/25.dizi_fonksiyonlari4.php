<pre style="font-size:18px;">
<?php

/*
**Dizi Fonksiyonları 4**
current(); Bir dizideki geçerli öğeyi döndür.
end();Bir dizinin dahili işaretçisini son elemanına ayarlar.
next();Bir dizinin dahili işaretçisini ilerletir.
prev();Dahili dizi işaretçisini geri alır.
reset();Bir dizinin dahili göstericisini ilk elemana konumlar.

extract(); Bir dizideki değişkenleri simge tablosuna dahil eder.

asort(); Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan  küçükten büyüğe doğru sıralar.
arsort(); Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan  büyükten küçüğe doğru sıralar.

ksort(); Bir diziyi anahtarlarına göre küçükten büyüğe doğru sıralar.
krsort(); Bir diziyi anahtarlarına göre büyükten küçüğe doğru sıralar.
*/

$dizi=['bir'=>'araba','iki'=>'bisiklet','üç'=>'motor','dört'=>'uçak','beş'=>'tren'];
$dizi1=[
    1=>7,
    2=>9,
    3=>6,
    4=>8,
    5=>10
];
echo current($dizi)."<br>";

echo next($dizi)."<br>";
echo next($dizi)."<br>";
echo prev($dizi)."<br>";

echo end($dizi)."<br>";

echo reset($dizi)."<br>";
echo current($dizi)."<br>";

extract($dizi);
echo $dört."<br>";


asort($dizi1);
print_r($dizi1)."<br>";

arsort($dizi1);
print_r($dizi1)."<br>";

ksort($dizi1);
print_r($dizi1)."<br>";

krsort($dizi1);
print_r($dizi1);

?>
</pre>