<?php

function draw_triangle($deger){

 for ($i=0; $i <$deger ; $i++) { 
         $j=0;
        while ($j <= $i) {
           echo "*";
           $j++;
        }
        echo "<br>";
 }

}

draw_triangle(15);



?>