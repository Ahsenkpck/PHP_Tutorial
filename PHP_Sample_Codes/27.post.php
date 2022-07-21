<pre>
<?php

function filtre($p){
    return is_array($p)? array_map('filtre',$p):htmlspecialchars(trim($p));
}

//return htmlspecialchars(trim($e));
$dizi=array_map('filtre',$_POST);

echo html_entity_decode($dizi['isim'])."<br>";//html etiketine göre ekranda gösterir.

print_r($dizi);




/* 
$isim=trim($_POST['isim']);
echo $isim."<br>";
$e_posta=trim($_POST['e_posta']);
echo $e_posta."<br>";
$e_posta=trim($_POST['sifre']);
$password=md5($e_posta);
echo $password;
*/

?>
</pre>