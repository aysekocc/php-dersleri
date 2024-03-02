<?php

$urunadi = "bilgisayar";
$urunfiyat = 20000;
$kdvoran = 0.18;

$urunkdvlifiyat = $urunfiyat + ($kdvoran*$urunfiyat);

$sonuc = "{$urunadi} isimli ürünün fiyatı  {$urunkdvlifiyat} TL";

echo $sonuc."<br>"; 
echo strlen( $sonuc);


?>