<?php

/*
**Koşullu İfadeler**
-IF
-IF ELSE
-ELSEIF
-Ternary (Üçlü Operatör)
*/

$kosul=true;
if($kosul){
echo "Koşul Sağlandı!<br>";
}

$a=50;
$b=50;
if($a<$b){
    echo "A B den küçük!";
}elseif($a>$b){
    echo "A B den büyük!";
}else{
    echo "A B ye eşit!<br>";
}


echo $a == 7 ? 'Eşittir! ': 'Eşit Değil! ';


?>