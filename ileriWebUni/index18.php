<?php

echo 'İnclude Örneği<br/>';
include('includeedileceksayfa.php'); // require , include_once, require_once değişken atama durumları
echo '<br/>';

function merhaba()
{
	echo "Merhaba fonksiyonu koştu";
}
merhaba();

function donendeger()
{
	return "String geriye donduruyor";
}

echo '<br/>';
echo donendeger();
echo '<br/>';
$yazi = donendeger();
echo $yazi;


echo '<br/>';
$selam = mexhaba('Erhan');
echo $selam;

function mexhaba($kisi)
{
	return "Merhaba " . $kisi;
}

echo '<br/>';
$selamlama = gunaydin();
echo $selamlama;

function gunaydin($isim = 'Sevgi')
{
	return "Günaydın " . $isim;
}

echo '<br/>';
$selamlama = gunaydin('Haluk');
echo $selamlama;


echo '<br/>';
$ad = 'Hakan';
echo 'Merhaba ' . $ad . '<br/>';
$yazdir = karsilama();
echo $yazdir . '<br/>';
echo karsilama("Selim") . '<br/>';
function karsilama($ad = 'Kamil')
{
	return 'Merhaba ' . $ad;
}
echo $ad;
echo '<br/>';
$sebze = 'patlican';
kozleme();

function kozleme()
{
	global $sebze;
	echo 'Merhaba ' . $sebze;
}

echo '<br/>';
function rakamyaz()
{
	static $rakam = 0;
	echo $rakam . "<br/>";
	$rakam++;
}

for ($i = 0; $i < 10; $i++) {
	rakamyaz();
}

function disfonksiyon($isim)
{
	function icfonksiyon()
	{
		if (date("a") == "am")  // date fonksiyonu a parametresi ile kullanılırsa geriye am yada pm döndürür
			return "Günaydın ";
		else
			return "İyi Günler";
	}
	return icfonksiyon() . " " . $isim;
}


echo disfonksiyon("Gülay");
echo '<br/>';
echo icfonksiyon();
echo '<br/>';

function say($n)
{
	if ($n < 30) {
		echo  $n . '<br/>';
		$n++;
		say($n);
	}
}

say(1);
