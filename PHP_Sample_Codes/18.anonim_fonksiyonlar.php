<?php

//Anonim Fonksiyonlar

/*
function topla(){
    return 2+4;
}
echo topla();
*/


$topla= function($s1,$s2){//anonim fonksiyonların ismi olmaz 

return $s1+$s2;

};//anonim fonksiyonlar ; ile biter

echo $topla(5,7);
echo "<br>";


$dizi=[
2,3,4,5,6
];

$dizi=array_map(function($e){return 2*$e;},$dizi);
echo "<pre>";
print_r($dizi);
echo "<br>";

$islem=[

    'topla'=>function($a,$b){return $a+$b;},
    'cikar'=>function($a,$b){return $a-$b;},
    'carp'=>function($a,$b){return $a*$b;},
    'bol'=>function($a,$b){return $a/$b;}

];

echo $islem['topla'](2,5)."<br>";
echo $islem['cikar'](2,5)."<br>";
echo $islem['carp'](2,5)."<br>";
echo $islem['bol'](2,5)."<br>";


?>