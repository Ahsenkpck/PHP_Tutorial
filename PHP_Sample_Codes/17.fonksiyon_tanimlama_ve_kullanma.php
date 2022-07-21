<?php

/*

Fonksiyonlar kısaca bir veya daha fazla komutun içinde yer aldığı yapılardır.

Php' de fonksiyonları, yerleşik ve kullanıcı tanımlı olmak üzere ikiye ayırabiliriz.

Yerleşik Fonksiyonlar: Php' de öncede tanımlanmış olarak kullanıma hazır fonksiyonlardır.

Kullanıcı tanımlı fonksiyonlar: Geliştirici tarfından oluşturularak kullanılan fonksiyonlardır.


*/

function isim(){

    echo "Ahsen ";
}

isim();


function soyisim(){

    return "Kıpçak";
   
}

echo soyisim();

function topla($sayi1,$sayi2){
    return $sayi1+$sayi2;

}
echo topla(sayi1:3,sayi2:5);
echo topla(12,34);


function carp($sayi1=7,$sayi2=4){//Default deger verilebilir
    return $sayi1*$sayi2;
}
echo carp();
?>