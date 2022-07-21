<?php

for ($i=0; $i < 10; $i++) { 
    echo "<pre>".$i." ";
}

$dizi=[
    'Ali',
    'Veli',
    'Ahmet',
    'Mehmet',

];
for ($i=0; $i <count($dizi); $i++) { //count($dizi)->dizinin uzunluğunu verir
   echo "<br>".$dizi[$i]."<br>";
}

?>