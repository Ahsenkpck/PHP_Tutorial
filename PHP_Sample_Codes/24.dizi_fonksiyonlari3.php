<pre style="font-size:18px;">
<?php

/*
**Dizi Fonksiyonları 3**

in_array();Bir dizide bir değerin varlığını araştırır.
array_shift();Dizinin başlangıcından bir eleman çıkarır.
array_pop();Dizinin sonundaki elemanı diziden çıkarır.
array_slice();Bir dizinin belli bir bölümünü döndürür.
array_sum();Bir dizideki değerlerin toplamını hesaplar.
array_product();Bir dizideki değerlerin çarpımını bulur.
array_unique();Diziden yinelenen değerleri siler.
array_values();Bir dizinin tüm değerlerini döndürür.
array_push();Belli sayıda elemanı dizinin sonuna ekler.
array_unshift();Bir dizinin başlangıcına bir veya birden fazla eleman ekler.
array_keys();Bir dizideki tüm anahtarları veya bir anahtar alt kümesini döndürür.

*/

$arr1=['Ahsen','Yuşa','Şura','Ali','Ayşe'];
$arr2=[1,2,4,89,32,90,21,45,67,78,89];
$arr3=['isim1'=>'Ahsen','isim2'=>'Şura','isim3'=>'Yuşa'];
$arr4=['Elma','Armut','Çilek','Muz','Avokado','Kivi'];
$arr5=['Gül','Sümbül','Kaktüs','Aloa Vera','Papatya'];


var_dump(in_array('Ali',$arr1));

array_shift($arr1);
print_r($arr1);

array_pop($arr1);
print_r($arr1);

$newarray=array_slice($arr4,1,4);
print_r($newarray);

print_r(array_sum($arr2));
echo "<br>";
print_r(array_product($arr2));
echo "<br>";
array_push($arr1,'Elif','Ahmet','Mehmet');
print_r($arr1);

array_unshift($arr5,'Lale','Leylak');
print_r($arr5);

print_r(array_keys($arr3));
?>
</pre>