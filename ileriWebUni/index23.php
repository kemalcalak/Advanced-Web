<?php 
//mysql deki verilerin sıralanması
echo'
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
	<title>MYSQL\'deki Verilerin Listelenmesi</title>
</head>
<body>
<table border="2">
<tr>
<td>ID</td>
<td>NAME</td>
<td>HIT</td>
</tr>
';
$baglanti=mysqli_connect('localhost','root','','subwaysurf');
//mysqli_set_charset():Yapılan sorguların veri tabanı üzerinde hangi karakter seti ile belirtileceği belirlenir.Amaç karakter setini genişletmektir.
mysqli_set_charset($baglanti,"utf-8");
//sorgumuzu belirleriz
$sql="select id,name,hit, from games where swf not like '%oyunskorlarim%' order by hit desc";
//sorgumuzu icra ederiz.Sonuç kümesi döner ve $result içine kaydolur.
$result=mysqli_query($baglanti,$sql); //Sorguyu çalıştırır ve sonuç kümesini döndürür.
$i=0;$renk;
//Bahsedilen sonuç kümesini incelememizi sağlar(3 fonksiyonla da incelenebilir)
//mysqli_fetch_assoc:Verileri sütün bazlı çekebilmemizi sağlar
//mysqli_fetch_array: Hem sayısal veriler hemde sütün adı kullanılır.
//mysqli_fetch_row:Parametre olarak sayısal deðer kullanılması gerekir.
while($row=mysqli_fetch_assoc($result)) //Sorguya ait sonuçların satır satır çekilmesini sağlar.
{
	if ($i%2==0) 
		$renk='gray';
	else
		$renk='aqua';

	echo '<tr><td bgcolor='.$renk.'>'.$row["id"].'</td><td bgcolor='.$renk.'>'.$row["name"].'</td><td bgcolor='.$renk.'>'.$row["hit"].'</td></tr>';
	$i++;
	}
	//Sorguya ait sonuçların ortadan kaldırılmasını sağlıyor.Ram i rahatlatmak adına sunucuyu rahatlatmak için kapatmak doqrudur
mysqli_close($baglanti);
echo'</table>
	</body></html> ';
 ?>