<?php
session_start();
if ($_SESSION["kitap"] = "PHP")
	echo "Session Oluşturuldu: " . session_id() . "<br/>";
else
	echo "Session Oluşturulamadı<br/>";

unset($_SESSION['kitap']);
session_regenerate_id(); //session id değiştirir

if ($_SESSION["kitap2"] = "Web Tasarım")
	echo "Session Oluşturuldu: " . session_id() . "<br/>";
else
	echo "Session Oluşturulamadı<br/>";

$sebze = array();
$sebze['yaprakli'] = 'Ispanak';
$sebze['kok'] = 'Havuç';
$sebze['yuvarlak'] = 'Domates';
$_SESSION['alacak'] = $sebze;


echo '<a href="sessionoku.php" title="session oku">Session Oku</a>';
