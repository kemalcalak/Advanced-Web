<?php
echo '
<html>
<head>
<meta http-equiv="Contet-Typye" content="text/html"; charset="utf-8";
<title>MYSQL Veri Ekleme</title>
</head>
<body>
';
$baglanti = mysqli_connect('localhost', 'root', '', 'subwaysurf');
mysqli_set_charset($baglanti, "utf-8"); //Türkçe karakter sorununu çözmek için kullanılır. 
$sql = "insert into comments (name,comment,gameid,status,time,ip,blogid,userid)VALUES('Gökhan','oyun çok güzel','12146',1,196732561,'0.0.0.0',0,0)";
mysqli_query($baglanti, $sql);
mysqli_close($baglanti);
echo "Kayıt ekleme başarıyla tamamlandı.";
echo '</body></html>';
