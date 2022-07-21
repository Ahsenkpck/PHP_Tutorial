<pre>
<?php

/*
**String Fonksiyonları**

strlen($metin) Verilen metnin uzunluğunu döndürür (mb_strlen()->türkçe karakterler için kullanılır)

explode($ayirici,$metin);

implode($ayirici,$dizi);

str_split($metin,$sayi);

ltrim($metin), rtrim($metin), trim($metin);

substr($metin,$baslangic,$uzunluk);

strtolower($metin), strtoupper($metin);

ucfirst($metin), ucwords($metin); Bu iki fonksiyon sırasıyla verilen metnin ilk karakterini (ucfirst) ve metindeki her kelimenin ilk karakterini büyültür

str_replace($kaynak,$hedef,$metin) Verilen metindeki kaynak karakterlerin yerine hedef karakterleri koyarak değiştirme yapar. Bu fonksiyon küçük büyük harfe duyarlıdır

nl2br($metin); String ifadelerde kullanılan ve alt satıra geçmeyi sağlayan \n yerine kaynak kodda <br> yazmak için kullanılır

md5($metin), sha1($metin) Sırasıyla aldığı metne karşılık gelen karmaşık md5 ve sha1 kodlarını verir.

strstr(); Bir dizgede belirtilen karakterden sonrasını döndürür.

*/

$metin='Ahsen Kıpçak';
echo mb_strlen($metin)."<br>";
//echo strlen($metin,'UTF-8');

$array=(explode(' ',$metin));
print_r($array);

echo implode('#',$array);
echo "<br>";
$array1=mb_str_split($metin,2);
print_r($array1);

$metin1='    Computer Engineer    ';
echo strlen($metin1)."<br>";
$metin1=ltrim($metin1);//sol boşlukları siler
$metin1=rtrim($metin1);//sağ boşlukları siler
echo strlen($metin1)."<br>";

$metin2='    Hello PHP    ';
echo strlen($metin2)."<br>";
$metin2= trim($metin2);
echo strlen($metin2)."<br>";


$metin3='I am a Computer Engineer';
$metin3=substr($metin3,3,18);
echo $metin3."<br>";

$metin4='I am StudYing PhP';
echo mb_strtolower($metin4)."<br>";
echo mb_strtoupper($metin4)."<br>";

echo ucfirst($metin4)."<br>";
echo ucwords($metin4)."<br>";

echo str_replace('PhP','english',$metin4)."<br>";

$metin5="This is a\n page";
echo nl2br($metin5)."<br>";

$sifre="12345";
$db_sifre='827ccb0eea8a706c4c34a16891f84e7b';

if (md5($sifre)==$db_sifre) {
    echo 'Şifreniz doğrudur!';
}else{
    echo 'Şifreniz hatalıdır!';
}
echo "<br><br><br>";
$metin6="ahsen@ahsenkpckdev.com";
echo strstr($metin6,'@');


?>
</pre>