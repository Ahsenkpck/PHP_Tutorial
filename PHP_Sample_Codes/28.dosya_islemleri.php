<?php

/*DOSYA DİZİN İŞLEMLERİ (DOSYA İŞLEMLERİ)

r  : Read işlemi. Dosyanın sadece içeriğinin okunması gerektiğini belirtir.

r+ : Dosyanın içeriğinin hem okunabilmesi hem de yazılabilmesinin gerektiğini belirtir.

w  : Dosyaya sadece yazma işleminin yapılabilmesinin gerektiğini belirtir.
     Dosyanın içeriği tamamen silinir ve baştan itibaren yazmaya başlar.
     Dosya belirtilen adreste yok ise yeniden oluşturulur.
     
w+ : Dosyaya hem yazma işleminin yapılabilmesi hem de dosya içeriğinin okunabilmesinin gerektiğini belirtir.
     Dosyanın içeriği tamamen silinir ve baştan itibaren yazmaya başlar.
     Dosya belirtilen adreste yok ise yeniden oluşturulur.
     
a: : Dosya içerisine sadece veri eklenebilmesi gerektiğini belirtir.
     Dosyanın içeriği silinmez, içeriğin sonuna veri eklenir. 
     Dosya belirtilen adreste yok ise yeniden oluşturulur.
     
a+ : Dosyaya hem veri eklenebilmesi hem de verinin okunabilmesinin gerektiğini belirtir.
     Dosyanın içeriği silinmez, içeriğin sonuna veri eklenir.
     Dosya belirtilen adreste yok ise yeniden oluşturulur.
     
x  : Dosyanın oluşturulması sağlanır ve oluşturulan dosyanın içerisine veri yazmak için açılması gerektiğini belirtir.
     Aynı isimde bir dosya belirtilen adreste var ise fopen fonksiyonunda 'false' değeri döner.

x+ : Dosyanın oşturulması sağlanır ve içerisine hem veri yazma hem de verileri okunması gerektiğini belirtir.
    Aynı isimde bir dosya belirtilen adreste var ise fopen fonksiyonunda 'false' değeri döner ve hata oluşturur.

*/

//touch('test1.txt',time());-->dosya oluşturma

//unlink('test.txt');//-->dosya silme

fopen('test1.txt','w');

?>