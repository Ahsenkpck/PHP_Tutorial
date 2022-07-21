<?php

/*
**Dizi Fonksiyonları 2**

shuffle();
    Bir diziyi karıştırır.

array_combine();
    Anahtarlar için bir dizi, değerler için ise başka bir dizi kullanarak
    bir ilişkisel dizi oluşturur.

array_count_values();
    Biz dizideki tüm değerleri sayar.

array_flip();
    Bir dizideki anahtarlarla değerleri yer değiştirir.

array_key_exists();
    Belirtilen anahtar veya indis dizide var mı diye bakar.

array_map();
    Belirtilen dizilerin elemanlarını geriçağırım işlevini uygular.

array_filter();
    Bir dizinin elemanlarını bir geriçağırım işleviyle süzgeçten geçirir.
    
array_merge();
    Belirtilen dizileri ardarda ekleyerek yeni bir dizi oluşturur.

array_rand();
    Bir diziden belli sayıda rastgele anahtar döndürür.

array_reverse();
    Diziyi tersine sıralayıp döndürür.

array_search();
    Bir dizide belirtilen değeri arar ve bulursa ilgili ilk anahtarı döndürür.

*/

echo "<pre>";
/* 
$numbers=range(1,20);//range(baslangic,bitis,artismiktari) ile dizi oluşturulur.

shuffle($numbers);

print_r($numbers);

*/

$fruit=['apple','strawberry','banana','apple','strawberry','banana','banana','banana'];
$letter=['a','b','c','isim'=>'Ahsen'];

/* 
$dizi=array_combine($fruit,$letter); iki dizi aynı boyutta olmalı
print_r($dizi);
*/
/*
$dizi1=array_count_values($fruit);
print_r($dizi1);

$dizi2=array_flip($letter);
print_r($dizi2);

$dizi3=array_key_exists(4,$letter);
$dizi4=array_key_exists('isim',$letter);
var_dump($dizi3);
var_dump($dizi4);
*/


$numbers=range(1,10);

function cube($sayi){
    return $sayi*$sayi*$sayi;
}
$dizi1=array_map('cube',$numbers);
print_r($dizi1);


$dizi=array_map(function($e){
    return $e+2;
},$numbers);

print_r($dizi);



$numbers=range(1,10);
$cift_sayilar=array_filter($numbers,function($e){
    return $e%2==0 ? $e :false;
});

print_r($cift_sayilar);


/*

$sayilar1=range(1,10);
$sayilar2=range(11,20);
$sayilar3=range(21,30);
$sayilar4=range(31,40);

$yenidizi=array_merge($sayilar1,$sayilar2,$sayilar3,$sayilar4);

print_r($yenidizi);
*/

$dizi=['Ahsen'=>'isim1','Ali'=>'isim2','Veli'=>'isim3','Şura'=>'isim4','Yuşa'=>'isim5','Şura'=>'isim6'];
print_r(array_rand($dizi,3));

/*
print_r(array_reverse($dizi));

$arr=array_search('Şura',$dizi);//Dizide karşılaştığı ilk elemanın indisini verir

print_r($arr);
*/
?>
