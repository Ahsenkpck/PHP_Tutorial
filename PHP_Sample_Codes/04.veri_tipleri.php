<?php
/*
##Veri Tipleri##
-String
-Integer
-Float(Double)
-Boolean(true,false)
-Array(Dizi)
-Object(Nesne)
-NULL
-->gettype();
*/

$name="Ahsen";
echo gettype($name);

echo "<br>";

$age=21;
echo gettype($age);

echo "<br>";

$array=[];
echo gettype($array);

echo "<br>";

$obj=new stdClass();
echo gettype($obj);

echo "<br>";

$nl=null;
echo gettype($nl);
?>