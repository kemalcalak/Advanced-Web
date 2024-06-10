<?php
$kitaplar[] = "PHP";
$kitaplar[] = "Web Tasarım";
$kitaplar[] = "Dreamweaver";

print_r($kitaplar); 

echo "<pre>"; //pre etiketi ile yazdırılan dizinin daha düzenli görünmesini sağlar
print_r($kitaplar); //print_r fonksiyonu ile dizi içeriğini ekrana yazdırma //çıktı: Array ( [0] => PHP [1] => Web Tasarım [2] => Dreamweaver )
echo "</pre>";

$meyveler[1] = "Elma";
$meyveler[2] = "Portakal";
$meyveler[3] = "Muz";

echo "<pre>";
print_r($meyveler); //çıktı: Array ( [1] => Elma [2] => Portakal [3] => Muz )
echo "</pre>";

$sebzeler["sebze1"] = "havuç";
$sebzeler["sebze2"] = "ıspanak";
$sebzeler["sebze3"] = "pırasa";

echo "<pre>";
print_r($sebzeler); //çıktı: Array ( [sebze1] => havuç [sebze2] => ıspanak [sebze3] => pırasa )
echo "</pre>";

$hayvanlar = array("at", "köpek", "fil");

echo "<pre>";
print_r($hayvanlar); //çıktı: Array ( [0] => at [1] => köpek [2] => fil )
echo "</pre>";

$hayvanlar = array(1 => "at", 2 => "köpek", 3 => "fil");
$hayvanlar[] = "kedi";
$hayvanlar[] = "atmaca";

print_r($hayvanlar); //çıktı: Array ( [1] => at [2] => köpek [3] => fil [4] => kedi [5] => atmaca )
echo "<pre>";
print_r($hayvanlar); 
echo "</pre>";

echo "Dizinin Birinci Elemanı " . $hayvanlar[1] . "<br/>"; //çıktı: at
echo "Dizinin İkinci Elemanı " . $hayvanlar[2] . "<br/>"; //çıktı: köpek
echo "Dizinin Üçüncü Elemanı " . $hayvanlar[3] . "<br/>"; //çıktı: fil
echo "Dizinin Dördüncü Elemanı " . $hayvanlar[4] . "<br/>"; //çıktı: kedi
echo "Dizinin Beşinci Elemanı " . $hayvanlar[5] . "<br/>"; //çıktı: atmaca
echo "Dizinin Altıncı Elemanı " . $hayvanlar[6] . "<br/>"; //bu eleman yok çıktı: Undefined offset: 6

echo "<pre>";
print_r(array_keys($hayvanlar)); //çıktı: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
echo "</pre>";
echo "<pre>";
print_r(array_keys($sebzeler)); //çıktı: Array ( [0] => sebze1 [1] => sebze2 [2] => sebze3 )
echo "</pre>";
echo "<pre>";
print_r(array_keys($kitaplar)); //çıktı: Array ( [0] => 0 [1] => 1 [2] => 2 )
echo "</pre>";

echo "<pre>";
print_r(array_values($hayvanlar)); //çıktı: Array ( [0] => at [1] => köpek [2] => fil [3] => kedi [4] => atmaca )
echo "</pre>";
echo "<pre>";
print_r(array_values($sebzeler)); //çıktı: Array ( [0] => havuç [1] => ıspanak [2] => pırasa )
echo "</pre>";
echo "<pre>";
print_r(array_values($kitaplar)); //çıktı: Array ( [0] => PHP [1] => Web Tasarım [2] => Dreamweaver )
echo "</pre>";

$bilgisayar = array(1 => "HP", 2 => "Lenovo", 3 => "Casper");
$firma = "IBM";

echo  "$bilgisayar[1]";
echo "<br/>";

if (is_array($bilgisayar)) //çıktı: $bilgisayar değişkeni dizidir
	echo "\$bilgisayar değişkeni dizidir<br/>";
else
	echo "\$bilgisayar değişkeni dizi değildir<br/>";


if (is_array($firma)) //çıktı: $firma değişkeni dizi değildir
	echo '$firma değişkeni dizidir<br/>';
else
	echo '$firma değişkeni dizi değildir<br/>';


//dizideki değer sayısı

echo '$kitaplar Dizisindeki Değer Sayısı ' . count($kitaplar) . '<br/>'; // count: dizideki değer sayısını döndürür //çıktı: $kitaplar Dizisindeki Değer Sayısı 3
echo '$hayvanlar Dizisindeki Değer Sayısı ' . count($hayvanlar) . '<br/>'; //çıktı: $hayvanlar Dizisindeki Değer Sayısı 5

//dizide anahtar olarak tanımlımı

if (array_key_exists('1', $hayvanlar)) // array_key_exists: dizide belirtilen anahtarın olup olmadığını kontrol eder //çıktı: 1 dizide key olarak vardır
	echo '1 dizide key olarak vardır<br/>';
else
	echo '1 dizide key olarak yoktur<br/>';

if (array_key_exists('4', $bilgisayar)) //çıktı: 4 dizide key olarak yoktur
	echo '4 dizide key olarak vardır<br/>';
else
	echo '4 dizide key olarak yoktur<br/>';

//diziden değer silme

echo '<pre>';
print_r($hayvanlar); //çıktı: Array ( [1] => at [2] => köpek [3] => fil [4] => kedi [5] => atmaca )
echo '</pre>';
unset($hayvanlar[3]);
echo '<pre>';
print_r($hayvanlar); //çıktı: Array ( [1] => at [2] => köpek [4] => kedi [5] => atmaca )
echo '</pre>';

// değer ile anahtarların yer değiştirmesi

echo '<pre>';
print_r($bilgisayar); //çıktı: Array ( [1] => HP [2] => Lenovo [3] => Casper )
echo '</pre>';
$yenidizi = array_flip($bilgisayar); // array_flip: değerlerle anahtarları yer değiştirir
echo '<pre>';
print_r($yenidizi); //print_r(array_flip($bilgisayar)); //çıktı: Array ( [HP] => 1 [Lenovo] => 2 [Casper] => 3 )
echo '</pre>';


//diziyi tersten sıralama
echo '<pre>';
print_r($meyveler); //çıktı: Array ( [1] => Elma [2] => Portakal [3] => Muz )
echo '</pre>';
$meyveler = array_reverse($meyveler); // array_reverse: diziyi tersten sıralar
echo '<pre>';
print_r($meyveler); //çıktı: Array ( [3] => Muz [2] => Portakal [1] => Elma )
echo '</pre>';


//dizi birleştirme

$dizibirlesimi1 = array_merge($hayvanlar, $meyveler, $kitaplar, $sebzeler); // array_merge: dizileri birleştirir
echo '<pre>';
print_r($dizibirlesimi1); //çıktı: Array ( [1] => at [2] => köpek [4] => kedi [5] => atmaca [3] => Muz [2] => Portakal [1] => Elma [0] => PHP [1] => Web Tasarım [2] => Dreamweaver [sebze1] => havuç [sebze2] => ıspanak [sebze3] => pırasa )
echo '</pre>';

$eklenecekdizi[25] = "Merhaba";

$dizibirlesimi2 = array_merge($meyveler, $sebzeler, $kitaplar, $hayvanlar, $eklenecekdizi);
echo '<pre>';
print_r($dizibirlesimi2); //çıktı: Array ( [1] => Elma [2] => Portakal [3] => Muz [sebze1] => havuç [sebze2] => ıspanak [sebze3] => pırasa [0] => PHP [1] => Web Tasarım [2] => Dreamweaver [1] => at [2] => köpek [4] => kedi [5] => atmaca [25] => Merhaba )
echo '</pre>';

echo '<pre>';
print_r(array_keys($dizibirlesimi2)); //çıktı: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => sebze1 [4] => sebze2 [5] => sebze3 [6] => 0 [7] => 1 [8] => 2 [9] => 1 [10] => 2 [11] => 4 [12] => 5 [13] => 25 )
echo '</pre>';



//diziyi doldurmak
$isim = array(1 => "Fatma", 2 => "Ali", 3 => "Hasan", 4 => "Zehra");
$isim = array_pad($isim, 50, "Mehmet"); // array_pad: diziyi belirtilen değerle doldurur
echo '<pre>';
print_r($isim); //çıktı: Array ( [1] => Fatma [2] => Ali [3] => Hasan [4] => Zehra [5] => Mehmet [6] => Mehmet [7] => Mehmet [8] => Mehmet [9] => Mehmet [10] => Mehmet [11] => Mehmet [12] => Mehmet [13] => Mehmet [14] => Mehmet [15] => Mehmet [16] => Mehmet [17] => Mehmet [18] => Mehmet [19] => Mehmet [20] => Mehmet [21] => Mehmet [22] => Mehmet [23] => Mehmet [24] => Mehmet [25] => Mehmet [26] => Mehmet [27] => Mehmet [28] => Mehmet [29] => Mehmet [30] => Mehmet [31] => Mehmet [32] => Mehmet [33] => Mehmet [34] => Mehmet [35] => Mehmet [36] => Mehmet [37] => Mehmet [38] => Mehmet [39] => Mehmet [40] => Mehmet [41] => Mehmet [42] => Mehmet [43] => Mehmet [44] => Mehmet [45] => Mehmet [46] => Mehmet [47] => Mehmet [48] => Mehmet [49] => Mehmet [50] => Mehmet )
echo '</pre>';

$kusisimleri = array(1 => "Çaylak", 2 => "Kerkenez", 3 => "Kartal", 4 => "Doğan");
$kusisimleri = array_pad($kusisimleri, -8, "Şahin"); // array_pad 2. parametre negatif olursa diziyi tersten doldurur
echo '<pre>';
print_r($kusisimleri); //çıktı: Array ( [1] => Çaylak [2] => Kerkenez [3] => Kartal [4] => Doğan [5] => Şahin [6] => Şahin [7] => Şahin [8] => Şahin )
echo '</pre>';


$balıkisimleri = array(1 => "Balina", 2 => "Yunus", 3 => "Hamsi", 4 => "İstavrit");
$balıkisimleri = array_pad($balıkisimleri, 3, "Palamut"); // array_pad: diziyi belirtilen değerle doldurur
echo '<pre>';
print_r($balıkisimleri); //çıktı: Array ( [1] => Balina [2] => Yunus [3] => Hamsi [4] => İstavrit )
echo '</pre>';

//parça çıkarma
$derskitap = array(1 => "PHP", 2 => "Web Tasarım", 3 => "Dreamveawer", 4 => "Oracle", 5 => "SQL Server");
$derskitap1 = array_slice($derskitap, 2); // array_slice: dizinin belirtilen kısmını alır
echo '<pre>';
print_r($derskitap1); //çıktı: Array ( [2] => Web Tasarım [3] => Dreamveawer [4] => Oracle [5] => SQL Server )
echo '</pre>';

$derskitap2 = array_slice($derskitap, 2, 2); // array_slice 3. parametre kaç eleman alınacağını belirtir
echo '<pre>';
print_r($derskitap2); //çıktı: Array ( [2] => Web Tasarım [3] => Dreamveawer )
echo '</pre>';


//hangi değerden kaç tane var
$adlar = array(1 => "Ahmet", 2 => "Hasan", 3 => "Ahmet", 4 => "Hasan", 5 => "Ahmet Hasan");
echo '<pre>';
print_r(array_count_values($adlar)); // array_count_values: dizideki değerlerin kaç kez tekrarlandığını bulur //çıktı: Array ( [Ahmet] => 2 [Hasan] => 2 [Ahmet Hasan] => 1 )
echo '</pre>';

//dizi indisi karakter büyüt
echo '<pre>';
print_r($adlar); //çıktı: Array ( [1] => Ahmet [2] => Hasan [3] => Ahmet [4] => Hasan [5] => Ahmet Hasan )
echo '</pre>';
$adlar = array_flip($adlar);
echo '<pre>';
print_r($adlar); //çıktı: Array ( [Ahmet] => 1 [Hasan] => 4 [Ahmet Hasan] => 5 )
echo '</pre>';
$adlar1 = array_change_key_case($adlar, CASE_UPPER); // array_change_key_case: dizi anahtarlarını büyük harfe çevirir
echo '<pre>';
print_r($adlar1); //çıktı: Array ( [AHMET] => 1 [HASAN] => 4 [AHMET HASAN] => 5 )
echo '</pre>';
echo '<pre>';
print_r(array_keys($adlar1)); //çıktı: Array ( [0] => AHMET [1] => HASAN [2] => AHMET HASAN )
echo '</pre>';

//diziye değer ekleme
array_push($derskitap, "C++", "Java", "C#", "Fortran"); // array_push: dizinin sonuna değer ekler
echo '<pre>';
print_r($derskitap); //çıktı: Array ( [1] => PHP [2] => Web Tasarım [3] => Dreamveawer [4] => Oracle [5] => SQL Server [6] => C++ [7] => Java [8] => C# [9] => Fortran )
echo '</pre>';

array_push($adlar, "Cemal", "Ziya"); // array_push: dizinin sonuna değer ekler
echo '<pre>';
print_r($adlar); //çıktı: Array ( [1] => Ahmet [2] => Hasan [3] => Ahmet [4] => Hasan [5] => Ahmet Hasan [6] => Cemal [7] => Ziya )
echo '</pre>';

// dizinin son değerini silme
array_pop($adlar); // array_pop: dizinin son elemanını siler
echo '<pre>';
print_r($adlar); //çıktı: Array ( [1] => Ahmet [2] => Hasan [3] => Ahmet [4] => Hasan [5] => Ahmet Hasan [6] => Cemal )
echo '</pre>';

//dizinin ilk değerini silme
array_shift($adlar);	// array_shift: dizinin ilk elemanını siler
echo '<pre>';
print_r($adlar); //çıktı: Array ( [2] => Hasan [3] => Ahmet [4] => Hasan [5] => Ahmet Hasan [6] => Cemal )
echo '</pre>';

//dizinin başına değer ekleme
array_unshift($adlar, "Deniz", "Şeyma", "Kadir", "Veysel"); // array_unshift: dizinin başına değer ekler
echo '<pre>';
print_r($adlar); //çıktı: Array ( [0] => Deniz [1] => Şeyma [2] => Kadir [3] => Veysel [4] => Hasan [5] => Ahmet [6] => Hasan [7] => Ahmet Hasan [8] => Cemal )
echo '</pre>';

//A 'dan Z'ye sıralama
asort($adlar);
echo '<pre>';
print_r($adlar); //çıktı: Array ( [5] => Ahmet [3] => Ahmet [4] => Hasan [2] => Hasan [6] => Cemal [0] => Deniz [1] => Şeyma [7] => Ahmet Hasan [8] => Veysel )
echo '</pre>';

//A 'dan Z'ye sıralama
asort($adlar, SORT_STRING); // asort 2. parametre olarak sıralama türünü belirtir (SORT_STRING, SORT_NUMERIC) Sort_string: string sıralama yapar
echo '<pre> STRING PARAMETRESİYLE<br/>';
print_r($adlar); //çıktı: Array ( [5] => Ahmet [3] => Ahmet [4] => Hasan [2] => Hasan [6] => Cemal [0] => Deniz [1] => Şeyma [7] => Ahmet Hasan [8] => Veysel )
echo '</pre>';

//Z'den A'ya sıralama
arsort($adlar);	// arsort: Z'den A'ya sıralama yapar
echo '<pre>';
print_r($adlar); //çıktı: Array ( [8] => Veysel [7] => Ahmet Hasan [1] => Şeyma [0] => Deniz [6] => Cemal [2] => Hasan [4] => Hasan [3] => Ahmet [5] => Ahmet )
echo '</pre>';

//Anahtara Göre A'dan Z'ye sıralama

$diziornegi = array(15 => "Merhaba", 2 => "Selam", 87 => "Saygılar");
ksort($diziornegi); // ksort: anahtara göre sıralama yapar
echo '<pre>';
print_r($diziornegi); //çıktı: Array ( [2] => Selam [15] => Merhaba [87] => Saygılar )
echo '</pre>';

krsort($diziornegi); // krsort: anahtara göre Z'den A'ya sıralama yapar
echo '<pre>';
print_r($diziornegi); //çıktı: Array ( [87] => Saygılar [15] => Merhaba [2] => Selam )
echo '</pre>';
echo "----------------------------------------------";
//dizi birleştirme (indis atamalı)
$dizibirlestirme = array_combine($sebzeler, $meyveler);	// array_combine: dizileri birleştirir ve anahtarları 1. diziye göre atar
echo '<pre>';
print_r($dizibirlestirme); //çıktı: Array ( [havuç] => Elma [ıspanak] => Portakal [pırasa] => Muz )
echo '</pre>';

//diziler arasındaki farkı bulma
$kitaplar = array(0 => "PHP", 1 => "Web Tasarım", 2 => "Dreamweaver");
$kitaplar1 = array(1 => "PHP", 2 => "C++", 3 => "Java", 4 => "Web Tasarım");
$sonuc = array_diff($kitaplar, $kitaplar1);	// array_diff: diziler arasındaki farkı bulur 1. dizide olup 2. dizide olmayanları döndürür
echo '<pre>';
print_r($sonuc); //çıktı: Array ( [0] => PHP [1] => Web Tasarım [2] => Dreamweaver )
echo '</pre>';

//anahtarları ve değerleri esas alarak farkı bulma
$kitaplar = array(0 => "PHP", 1 => "Web Tasarım", 2 => "Dreamweaver");
$kitaplar2 = array(1 => "PHP", 2 => "C++", 3 => "Java", 4 => "Web Tasarım");
$sonuc = array_diff_assoc($kitaplar, $kitaplar2);	// array_diff_assoc: anahtarları ve değerleri esas alarak farkı bulur ve döndürür
echo '<pre>';
print_r($sonuc); //çıktı: Array ( [0] => PHP [1] => Web Tasarım [2] => Dreamweaver )
echo '</pre>';

$kitaplar = array(0 => "PHP", 1 => "Web Tasarım", 2 => "Dreamweaver");
$kitaplar3 = array(0 => "PHP", 1 => "C++", 2 => "Java", 3 => "Web Tasarım");
$sonuc = array_diff_assoc($kitaplar, $kitaplar3); // array_diff_assoc: anahtarları ve değerleri esas alarak farkı bulur ve döndürür
echo '<pre>';
print_r($sonuc); //çıktı: Array ( [1] => Web Tasarım [2] => Dreamweaver )
echo '</pre>';

//diziye otomatik değer atama
$kitaplar = array_fill(3, 5, "Android");	// array_fill: belirtilen aralığa belirtilen değeri atar , 2. parametre kaç tane değer atayacağını belirtir
echo '<pre>';
print_r($kitaplar); //çıktı: Array ( [3] => Android [4] => Android [5] => Android [6] => Android [7] => Android )
echo '</pre>';

$kitaplar = array_merge($kitaplar, array_fill(3, 5, "Android"));	// array_fill: belirtilen aralığa belirtilen değeri atar ve döndürür, array_fill: belirtilen aralığa belirtilen değeri atar
echo '<pre>';
print_r($kitaplar); //çıktı: Array ( [3] => Android [4] => Android [5] => Android [6] => Android [7] => Android [8] => Android [9] => Android [10] => Android [11] => Android [12] => Android )
echo '</pre>';

//dizi elemanları çarpımı
$sayisaldizi = array(1, 4, 8, 3); //string dönüştürmesi de yapabilir
echo array_product($sayisaldizi) . "<br/>";	// array_product: dizideki değerlerin çarpımını döndürür  //çıktı: 96

//dizi değerleri toplamı
$sayisaldizi = array(1, 4, 8, 3); //string dönüştürmesi de yapabilir
echo array_sum($sayisaldizi) . "<br/>";	// array_sum: dizideki değerlerin toplamını döndürür //çıktı: 16

//diziden rastgele değer seçme
echo $sayisaldizi[array_rand($sayisaldizi, 1)] . "<br/>"; // array_rand: diziden rastgele değer seçer. 1.parametre dizi, 2.parametre kaç tane değer seçileceğini belirtir //çıktı: 4

$rand_keys = array_rand($sayisaldizi, 2);	
echo $sayisaldizi[$rand_keys[0]] . "<br/>"; //çıktı: 8
echo $sayisaldizi[$rand_keys[1]] . "<br/>"; //çıktı: 3
//list komutu
list($kitap1, $kitap2, $kitap3, $kitap4) = $kitaplar3; 
echo $kitap1 . "|" . $kitap2 . "|" . $kitap3 . "|" . $kitap4; //çıktı: PHP|C++|Java|Web Tasarım
