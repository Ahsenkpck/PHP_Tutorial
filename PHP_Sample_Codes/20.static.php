<?php

//Static Tanımı


function say(){
    static $sayi=0;
    echo $sayi;
    $sayi++;

}

say();
say();
say();
say();

?>