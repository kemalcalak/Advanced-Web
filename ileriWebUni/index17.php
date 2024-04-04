<?php

echo date("d") . "<br/>"; // ayın gününü önüne 0 koyarak yazar. -> 04 / 25 / 15 iki haneli olarak yazar.

echo date("j") . "<br/>"; // ayın gününü 0 olmadan yazar. tek haneyse tekli çift haneyse çiftli

echo date("D") . "<br/>";  // ayın gününün ismini 3 haneli olarak yazar

echo date("l") . "<br/>"; // ayın gününün ismini tam olarak yazar

echo date("N") . "<br/>"; //haftanın hangi günündeyiz (Pazartesi için 1 den başlayarak)

echo date("w") . "<br/>"; //haftanın hangi günündeyiz (Pazar için 0 dan başlayarak)

echo date("z") . "<br/>"; //yılın hangi günündeyiz

echo date("W") . "<br/>"; // yılın kaçıncı haftasındayız

echo date("F") . "<br/>"; // hangi aydayız tam ismini verir

echo date("M") . "<br/>"; // ayın 3 harfli ismini verir

echo date("m") . "<br/>"; // hangi ayda olduğumuzu 2 hane olarak gösterir. 0 ile

echo date("n") . "<br/>"; // hangi ayda olduğumuzu 0 olmadan gösterir

echo date("t") . "<br/>"; // bulunduğumuz aydaki gün sayısı

if (date("L") == "1")
	echo "Bu yıl artık yıldır<br/>";
else
	echo "Bu yıl artık değildir<br/>";

echo date("Y") . "<br/>"; //hangi yıldayız  4 rakamlı

echo date("y") . "<br/>"; //hangi yıldayız  2 rakamlı

echo date("g") . "<br/>"; // 0 olmadan 1 ile 12 arasında saati gösterir

echo date("G") . "<br/>"; // 0 olmadan 1 ile 23 arasında saati gösterir

echo date("h") . "<br/>"; // 0 olacak şekilde 1 ile 12 arasında saati gösterir

echo date("H") . "<br/>"; // 0 olacak şekilde 1 ile 23 arasında saati gösterir

echo date("i") . "<br/>"; // 0 olacak şekilde dakikayı gösterir

echo date("s") . "<br/>"; // 00 - 59  arasında şekilde saniyeyi gösterir

$aylar = array(
	1 => "Ocak", 2 => "Şubat", 3 => "Mart", 4 => "Nisan", 5 => "Mayıs", 6 => "Haziran", 7 => "Temmuz", 8 => "Ağustos",
	9 => "Eylül", 10 => "Ekim", 11 => "Kasım", 12 => "Aralık"
);

echo "Bügünün Tarihi:" . date("d") . " " . $aylar[date("n")] . " " . date("Y") . "<br/>";
