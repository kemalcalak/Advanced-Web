<?php
$do = "Kaydet";
if (isset($do)) // isset: değişken tanımlı mı //çıktı: Do için Değişken Tanımlandı ve Değer Atandı
	echo "Do için Değişken Tanımlandı ve Değer Atandı<br/>";
$ro;
if (isset($ro)) //çıktı: Ro İçin Değişken Tanımlandı Değer Atanmadı
	echo "Ro İçin Değişken Tanımlandı Değer Atanmadı<br/>";
else
	echo "Ro İçin Isset False Döndürdü, İçerik Atanmayan Değişken İçin<br/>";

if (isset($po)) //çıktı: Po İçin Değişken Tanımlanmadı
	echo "Po İçin Değişken Tanımlanmadı<br/>";
else
	echo "Po İçin Isset False Döndürdü, Değişken tanımlı değil<br/>";

$bos;
if (empty($bos)) // empty: değişken boş mu //çıktı: Boş Değişken İçeriği Boş
	echo "Boş Değişken İçeriği Boş<br/>";
else
	echo "Boş Değişkenin İçeriği Dolu<br/>";

$dolu = "dolu";
if (empty($dolu)) //çıktı: Dolu Değişkenin İçeriği Dolu
	echo "Dolu Değişken İçeriği Boş<br/>";
else
	echo "Dolu Değişkenin İçeriği Dolu<br/>";

if (empty($po)) //çıktı: Po İçin Değişken Tanımlanmadı
	echo "Po İçin Değişken Tanımlanmadı<br/>";
else
	echo "Po İçin Empty False Döndürdü, Değişken tanımlı değil<br/>";

$kitap = "PHP";
echo $kitap . "<br/>";
//unset($kitap); // unset: değişkeni siler
echo $kitap . "<br/>";
if (empty($kitap)) //çıktı: Kitap Değişkeni İçeriği Dolu
	echo "Kitap Değişkeni İçeriği Boş<br/>";
else
	echo "Kitap Değişkenin İçeriği Dolu<br/>";
if (isset($kitap)) //çıktı: Kitap değişkeni tanımlı ve içeriği var
	echo "Kitap değişkeni tanımlı ve içeriği var<br/>";
else
	echo "Kitap Değişkeni İçeriği Boş veya Tanımlanmamış<br/>";

$makaleid = 12;
$yazidi = "12";

if (is_int($makaleid)) // is_int: değişken integer mı //çıktı: makaleid sayıdır
	echo "makaleid sayıdır<br/>";
else
	echo "makaleid sayı değildir<br/>";

if (is_int($yazidi)) //çıktı: yazidi sayıdır
	echo "yazidi sayıdır<br/>";
else
	echo "yazidi sayı değildir<br/>";

if (is_string($makaleid)) // is_string: değişken string mı //çıktı: makaleid string değildir
	echo "makaleid stringdir<br/>";
else
	echo "makaleid string değildir<br/>";

if (is_string($yazidi)) //çıktı: yazidi stringdir
	echo "yazidi stringdir<br/>";
else
	echo "yazidi string değildir<br/>";
