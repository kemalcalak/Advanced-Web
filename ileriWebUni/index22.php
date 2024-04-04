<?php 
//5.parametre de port verilir. Uzak bağlanırken port verilir.
$yeninesil=@mysqli_connect('db4free.net','sql_uzaktan_bgl','HqRL9sRZed','sql_uzkatan_bgl','3306');
//Port istenirse 1. parametre ile birlikte gösterilebilir.
//$yeninesil=@mysqli_connect('db4free.net:3306','sql_uzaktan_bgl','HqRL9sRZed','sql_uzkatan_bgl');
if($yeninesil==true)
	echo "Uzakt Mysql'e bağlandı </br>";
else
	echo "Uzak Mysql'e Bağlanamadı </br>";
//1.parametre alan adý olabilir vs vs ama hepsi ip ye dönüþür(bağlanacağımız sunucunun adresi)
//baðlanacaðýmýz sunucunun kullanýcý adý 
//3.parametre baðlayacaðýmýz sunucunun şifresi
//4.parametre veri tabanı adı
//local de olduðu için port verilmese de olur(5. parametre)
$yeninesil=@mysqli_connect('localhost','root','','test');
if($yeninesil==true)
	echo "Yerel Mysql'e bağlandı </br>";
else
	echo "Yerel Mysql'e Bağlanamdı </br>";


 ?>