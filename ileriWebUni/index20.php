<!DOCTYPE html>
<html>
<head>
	<title>Dört işlem</title>
</head>
<body>
	<form name="form1" method="POST" action="index20.php?islem=dort">
	<input type="text" name="rakam1" id="rakam1" size="5" />
	&nbsp;
	<select name="islem" id="islem">
		<option>işlem</option>
		<option value="Topla">+</option>
		<option value="Çıkar">-</option>
		<option value="Çarp">*</option>
		<option value="Böl">/</option>		
	</select>	
	&nbsp;
	<input type="text" name="rakam2" id="rakam2" size="2" />
	<input type="submit" name="button" id="button" value="Hesapla" />
	</form>

	<?php 
//$_GET['islem']: browser ın URL sinden çekilir.
//$_POST['islem']: yukarıdaki formun icindeki islem kastedilmiştir.
		if(isset($_GET['islem'])=="dort"&&$_POST['islem']!="Ýþlem")
		{
//bir önceki derstte oluşturulmuş fonksiyon kullanıldı.
			include('dortislem.php');
			dortislem($_POST['rakam1'],$_POST['rakam2'],$_POST['islem']); //GPOST yerine POST yazılabilir. Gpost: Get ve Post anlamına gelir.
		}

	 ?>

</body>
</html>