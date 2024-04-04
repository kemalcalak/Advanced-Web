<?php
//baslik cookesine gidip içindeki deðeri verir warning-header
echo "Cookienin içeriði : " . $_COOKIE["baslik"] . "<br/>";
echo "Sebze Dizisinin Ýçerikleri:</br>";
foreach ($_COOKIE["sebze"] as $key => $deger)
    echo "Sebze[" . $key . "] = " . $deger . "<br/>";

echo "Kitap Cookienin Ýçeriði : " . $_COOKIE["kitap"] . "<br/>";
echo "Web Kitap Cookienin Ýçeriði : " . $_COOKIE["web-kitap"] . "<br/>";
echo "Yeni Kitap Cookienin Ýçeriði : " . $_COOKIE["yeni-kitap"] . "<br/>";
