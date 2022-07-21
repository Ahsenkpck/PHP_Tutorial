<?php
error_reporting(E_ALL);
//Global Tanımı

$isim='Ahsen';

function write(){
    global $isim;//fonksiyon dışındaki değerlere erişmek için global yaparız
    echo $isim;
}

write();



?>