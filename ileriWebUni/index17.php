<?php

echo date("d") . "<br/>"; // ayın gününü önüne 0 koyarak yazar. -> 04 / 25 / 15 iki haneli olarak yazar. //çıktı: 25

echo date("j") . "<br/>"; // ayın gününü 0 olmadan yazar. tek haneyse tekli çift haneyse çiftli olarak. //çıktı: 25

echo date("D") . "<br/>";  // ayın gününün ismini 3 haneli olarak yazar //çıktı: Sat

echo date("l") . "<br/>"; // ayın gününün ismini tam olarak yazar //çıktı: Saturday

echo date("N") . "<br/>"; //haftanın hangi günündeyiz (Pazartesi için 1 den başlayarak) //çıktı: 6

echo date("w") . "<br/>"; //haftanın hangi günündeyiz (Pazar için 0 dan başlayarak) //çıktı: 6

echo date("z") . "<br/>"; //yılın hangi günündeyiz //çıktı: 114

echo date("W") . "<br/>"; // yılın kaçıncı haftasındayız //çıktı: 16

echo date("F") . "<br/>"; // hangi aydayız tam ismini verir //çıktı: April

echo date("M") . "<br/>"; // ayın 3 harfli ismini verir //çıktı: Apr

echo date("m") . "<br/>"; // hangi ayda olduğumuzu 2 hane olarak gösterir. 0 ile başlar //çıktı: 04

echo date("n") . "<br/>"; // hangi ayda olduğumuzu 0 olmadan gösterir //çıktı: 4

echo date("t") . "<br/>"; // bulunduğumuz aydaki gün sayısı //çıktı: 30

if (date("L") == "1") // artık yıl mı değil mi //çıktı: Bu yıl artık yıldır
	echo "Bu yıl artık yıldır<br/>";
else
	echo "Bu yıl artık değildir<br/>";

echo date("Y") . "<br/>"; //hangi yıldayız  4 rakamlı //çıktı: 2024

echo date("y") . "<br/>"; //hangi yıldayız  2 rakamlı //çıktı: 15

echo date("g") . "<br/>"; // 0 olmadan 1 ile 12 arasında saati gösterir //çıktı: 1

echo date("G") . "<br/>"; // 0 olmadan 1 ile 23 arasında saati gösterir //çıktı: 13

echo date("h") . "<br/>"; // 0 olacak şekilde 1 ile 12 arasında saati gösterir //çıktı: 01

echo date("H") . "<br/>"; // 0 olacak şekilde 1 ile 23 arasında saati gösterir //çıktı: 13

echo date("i") . "<br/>"; // 0 olacak şekilde dakikayı gösterir //çıktı: 16

echo date("s") . "<br/>"; // 00 - 59  arasında şekilde saniyeyi gösterir //çıktı: 36

$aylar = array(
	1 => "Ocak", 2 => "Şubat", 3 => "Mart", 4 => "Nisan", 5 => "Mayıs", 6 => "Haziran", 7 => "Temmuz", 8 => "Ağustos",
	9 => "Eylül", 10 => "Ekim", 11 => "Kasım", 12 => "Aralık"
);

echo "Bügünün Tarihi:" . date("d") . " " . $aylar[date("n")] . " " . date("Y") . "<br/>"; //çıktı: Bügünün Tarihi:25 Nisan 2024
