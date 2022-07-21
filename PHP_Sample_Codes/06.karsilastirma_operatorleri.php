<?php

/*

$a == $b    Eşittir                 TRUE FALSE
$a === $b   Aynıdır                 TRUE FALSE
$a != $b    Eşit değildir           TRUE FALSE
$a !== $b   Farklıdır               TRUE FALSE
$a < $b     Küçüktür                TRUE FALSE
$a < $b     Büyüktür                TRUE FALSE
$a <= $b    Küçük veya eşittir      TRUE FALSE
$a >= $b    Büyük veya eşittir      TRUE FALSE
$a <=> $b   Mekik                   0 1 -1

var_dump(value: )-->Bir değişkenin veri tipini verir.
*/

$a="2";
$b=2;

var_dump($a);
echo "<br>";
var_dump(value:$a==$b);
echo "<br>";
var_dump(value:$a===$b);
echo "<br>";
var_dump(value:$a!=$b);
echo "<br>";
var_dump(value:$a!==$b);
?>