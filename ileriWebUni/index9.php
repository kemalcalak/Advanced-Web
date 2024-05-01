<?php
//strstr fonksiyonu

$ifade = "Bu sene 2.sınıflar cok haylaz ornek yigit";
echo $ifade . "<br/>";
$sonuc = strstr($ifade, "sınıflar"); //string,aranacak ifade 

echo "strstr1:" . $sonuc . "<br/>";

$sonuc = strstr($ifade, "sınıflar", true); //string,aranacak ifade,true ise aranan ifadeyi dahil etmez
echo "strstr2:" . $sonuc . "<br/>";

//substr
$parca = substr($ifade, 0, 13); // string,baslangic,uzunluk 
echo "substr1:" . $parca . "<br/>"; // substr: stringin belirtilen aralığını döndürür


$parca = substr($ifade, -11, 5);
echo "substr2:" . $parca . "<br/>";


//mb_subtr
$ifade = "Bu sene 2.sınıflar çok haylaz örnek yigit";
$parca = mb_substr($ifade, 0, 13, "UTF-8"); // string,baslangic,uzunluk,karakter seti
echo "mb_substr3:" . $parca . "<br/>";	// mb_substr: stringin belirtilen aralığını döndürür 1. parametre string, 2. parametre başlangıç pozisyonu, 3. parametre uzunluk, 4. parametre karakter seti

//string pozisyonu
$kitap = "Web Tasarım Kılavuzu";
if (($index = mb_strpos($kitap, "ıl", 0, "UTF-8")) === false) // İlk Eleman 0
	echo "Aranan Eleman Bulunamadı" . "<br>"; // mb_strpos: stringin belirtilen karakterini döndürür 1. parametre string, 2. parametre aranacak ifade, 3. parametre başlangıç pozisyonu, 4. parametre karakter seti
else
	echo  $index . "<br>";
/*
//string ters pozisyonu
$kitap = "Web Tasarım Kılavuzu";
if (($index = mb_strrpos($kitap, "a", "UTF-8")) === false) 
	echo "Aranan Eleman Bulunamadı" . "<br>";
else
	echo  $index . "<br>";
*/

//substr count bir string parçasının bir ifadenin içinde kaç defa geçtiğini bulur

$yazar = "Erkan Balaban";
echo "a ifadesi $yazar içinde kaç defa geçiyor:  " . substr_count($yazar, "a") . "<br/>";


echo "a ifadesi 5. karakterden sonra $yazar içinde kaç defa geçiyor:  " . substr_count($yazar, "a", 5) . "<br/>";

echo "a ifadesi $yazar ifadesinde 5. karakterden itibaren 6 karakter içinde kaç defa geçiyor:  " . substr_count($yazar, "a", 5, 6) . "<br/>";

//bir stringin uzunluğu bulma

echo "'$yazar' ifadesininin uzunluğu: " . strlen($yazar) . "<br/>";
//stringin bir karakterden sonra geri kalan kısmını alma
$isim = "Serkan Tasıncak";
echo strpbrk($isim, 'a') . "<br/>"; //upper case duyarlı
echo strpbrk($isim, 's') . "<br/>";
echo strpbrk($isim, 'as') . "<br/>";

//wordwrap

$meyveler = "armut kiraz vişne kavun";
echo wordwrap($meyveler, 4, ", ") . "<br/>"; //wordwrap: stringi belirtilen uzunlukta bölerek döndürür 1. parametre string, 2. parametre uzunluk, 3. parametre ayraç



//str_replace
$film = "The Fast and The Furious";
$ikinci_film = str_replace("The", "Two", $film); //str_replace: stringin belirtilen kısmını değiştirir 1. parametre değiştirilecek ifade, 2. parametre yeni ifade, 3. parametre string
echo $ikinci_film . "<br/>";

//hepsi büyük
echo mb_strtoupper($yazar) . "<br/>"; //mb_strtoupper: stringin bütün karakterlerini büyütür

//hepsi küçük
echo mb_strtolower($yazar) . "<br/>";	//mb_strtolower: stringin bütün karakterlerini küçültür


//boşlukları atma

$ders = "  PHP  ";

echo "sol boşluğu sil_" . ltrim($ders) . "_geri kalan" . "<br/>";
echo "sağ boşluğu sil_" . rtrim($ders) . "_geri kalan" . "<br/>";
echo "her iki boşluğu sil_" . trim($ders) . "_<br/>";


//sadece stringin ilk harfini büyüt

$kitap = "web tasarım kılavuzu";
echo ucfirst($kitap) . "<br/>"; //ucfirst: stringin ilk harfini büyütür


// bütün kelimeleri ilk harfini buyut
echo ucwords($kitap) . "<br/>"; //ucwords: stringin bütün kelimelerinin ilk harfini büyütür


//sayı formatı
$toplamtutar = 2567.35752145656322;
echo number_format($toplamtutar, 2, ",", " "); //number_format: sayıyı belirtilen formata göre düzenler 1. parametre sayı, 2. parametre virgülden sonra kaç basamak olacağı, 3. parametre virgül, 4. parametre binlik ayraç
