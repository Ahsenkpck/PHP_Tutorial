<?php

//Diziler

$isimler1=array();
$isimler2=[];

echo gettype(($isimler1));
echo "<br>";
echo gettype(($isimler2));
echo "<br>";

$isimler3= array('Ahsen','Yuşa','Şura','Mehmet');
echo "<pre>";
print_r($isimler3);
echo "<br>";

echo $isimler3[2];
echo "<br>";

$isimler4=[
'isim1'=>'Ali',
'isim2'=>'Mehmet'

];
echo "<pre>";
print_r($isimler4);
echo $isimler4['isim2'];
echo "<br>";

var_dump($isimler4);
echo "<br>";


$kisi=[

'isim'=>"Ahsen Kıpçak",
'yas'=>21,
'meslek'=>"Bilgisayar Mühendisi"


];
var_dump($kisi);

?>