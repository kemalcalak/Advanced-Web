<?php
$islem = "";
if (isset($_GET["islem"]))
	$islem = $_GET["islem"];

if ($islem == "basla") {
	echo "Adınız Soyadınız: " . $_POST["adisoyadi"] . "<br/>";
	echo "Kullanıcı Adı: " . $_POST["kullaniciadi"] . "<br/>";
	echo "Şifre: " . $_POST["sifre"] . "<br/>";
	echo "Email: " . $_POST["email"] . "<br/>";
} else {
	echo '<form id="form1" name="form1" method="POST" action="index16.php?islem=basla">
<table width="400" border="1" cellspacing="2" cellpadding="2">
<tr>
	<td colspan="2"><center>ÜYELİK FORMU</center></td>
</tr>
<tr>
	<td width="110">Adınız Soyadınız:</td>
	<td width="276">
			<input type="text" name="adisoyadi" size="35"/>
	</td>
</tr>
<tr>
	<td>Kullanıcı Adınız</td>
	<td><input type="text" name="kullaniciadi" size="35" /></td>
</tr>
<tr>
	<td>Şifre</td>
	<td><input type="password" name="sifre" size="35" /></td>
</tr>
<tr>
	<td>EMail Adresi</td>
	<td><input type="email" name="email" size="35" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="button" value="ÜYE OL"></td>
</tr>
</table>
</form>
';
}
