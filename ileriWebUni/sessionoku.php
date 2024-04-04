<?php
session_start();
//ilk satýr için kod hata verecektir çünkü kitap sessionu unsetle birlikte index14 de silinmiþti.
echo "Kitap session'nýn Ýçeriði:" . $_SESSION["Kitap"] . "<br/>";
echo "Kitap2 session'nýn Ýçeriði:" . $_SESSION["Kitap2"] . "<br/>";

foreach ($_SESSION['alacak'] as $key => $value)
    echo "Sebze[" . $key . "]=" . $value . "<br/>";

foreach ($_SESSION['alacak'] as $key => $value)
    echo $value . "<br/>";
