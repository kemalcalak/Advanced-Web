<?php
$sayi1=5;
$sayi2=3;
echo "Kullanılan Rakamlar<br />";
echo "Sayı 1: ".$sayi1."<br />";
echo "Sayı 2: ".$sayi2."<br />";
echo "Sayıların Toplamı: ".($sayi1+$sayi2)."<br />";
echo "Sayıların Farkı:".($sayi1-$sayi2)."<br />";
echo "Sayıların Çarpımı:".$sayi1*$sayi2."<br />";
echo "Sayıların Bölümü:".$sayi1/$sayi2."<br />";
echo "Sayıların Kalanı:".$sayi1%$sayi2."<br />";
$sayi3=-4;
$deger=189;
echo "Sayı 3:".$sayi3."<br />";
echo "Sayı 3 Mutlak Değer:".abs($sayi3)."<br />";  
echo "Ark Kosinüs:".rad2deg(acos(1/2))."<br />"; // rad2deg: radyanı dereceye çevirir //ceva: 60
echo "Ark Sinüs:".rad2deg(asin(sqrt(3)/2))."<br />";  //cevap: 60
echo "Ark Tanjant:".rad2deg(atan(1))."<br />"; // atan: ark tanjant //cevap: 45
echo "Binary To Decimal:".bindec(10101)."<br />"; // bindec: binary to decimal //cevap: 21
echo "Yukarı Yuvarla:".ceil(5.02)."<br />"; // ceil: yukarı yuvarla //cevap: 6
echo "Decimal To Binary :".decbin(15)."<br />"; // decbin: decimal to binary //cevap: 1111
echo "Decimal To Octal :".decoct(22)."<br />"; // decoct: decimal to octal //cevap: 26
echo "Derece To Radyan :".deg2rad(60)."<br />"; // deg2rad: dereceyi radyana çevirir //cevap: 1.0471975511966
echo "E'nin Üssü :".exp(4)."<br />"; // exp: e'nin üssü //cevap: 54.598150033144
echo "Tabana Yuvarla: ".floor(8.87)."<br />"; // floor: tabana yuvarla //cevap: 8
echo "Olası En Büyük Değer: ".getrandmax()."<br />"; // getrandmax: olası en büyük değer //cevap: 2147483647
echo "Hex To Dec :".hexdec('abcd')."<br />"; // hexdec: hex to dec //cevap: 43981
echo "Sayı Sonlumu :".is_finite(1231343344)."<br />"; // is_finite: sayı sonlu mu //cevap: 1
echo "Sayı Sonlumu :".is_finite(log(0))."<br />";  //cevap:
echo "Sayı Sonsuzmu :".is_infinite(13113)."<br />";  //cevap:
echo "Sayı Sonsuzmu :".is_infinite(log(0))."<br />"; 
echo "Girilen Değer Sayı Değildir :".is_nan(acos(1.01))."<br />"; // is_nan: girilen değer sayı değil mi //cevap: 1
echo "Değer:".$deger."<br />"; 
echo "Girilen Değer Sayı Değildir :".is_nan($deger)."<br />"; //cevap:
echo "En Yüksek Değer :".max(17,14,3,4,67,4)."<br />";  // max: en yüksek değer //cevap: 67
echo "En Düşük Değer :".min(17,14,3,4,67,4)."<br />"; // min: en düşük değer //cevap: 3
echo "En Yüksek Olası Değer: ".mt_getrandmax()."<br />"; // mt_getrandmax: en yüksek olası değer //cevap: 2147483647
echo "Rastgele Değer: ".mt_rand()."<br />"; // mt_rand: rastgele değer 
echo "Aralıklı Rastgele Değer: ".mt_rand(100,400)."<br />"; // mt_rand: aralıklı rastgele değer
echo "Octal To Dec: ".octdec(75)."<br />"; // octdec: octal to dec //cevap: 61
echo "Pi Sayisi: ".pi()."<br />"; // pi: pi sayısı //cevap: 3.1415926535898
echo "Radyan To Derece: ".rad2deg(1.57)."<br />";   // rad2deg: radyanı dereceye çevirir //cevap: 89.954373835539
echo "Rastgele Değer: ".rand()."<br />"; 
echo "Aralıklı Rastgele Değer: ".rand(700,900)."<br />";
echo "Sayıyı Yuvarla :".round(4.5).",".round(4.4).",".round(4.7)."<br />"; // round: sayıyı yuvarla //cevap: 5,4,5
echo "Sayıyı Yuvarla :".round(4.543611232,2)."<br />"; //cevap: 4.54
echo "Sayıyı Yuvarla :".round(4.543611232,3)."<br />"; //cevap: 4.544
echo "Sinüs Değeri: ".sin(3.1415926535898/2)."<br />"; // sin: sinüs değeri //cevap: 1
echo "Karekök :".sqrt(4)."<br />"; // sqrt: karekök //cevap: 2
echo "Tanjant :".tan(3.1415926535898/4)."<br />"; // tan: tanjant //cevap: 1
?>