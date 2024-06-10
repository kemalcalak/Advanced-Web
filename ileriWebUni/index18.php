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
echo $selamlama; // Günaydın Haluk


echo '<br/>';
$ad = 'Hakan';
echo 'Merhaba ' . $ad . '<br/>'; // Merhaba Hakan
$yazdir = karsilama();
echo $yazdir . '<br/>'; // Merhaba Kamil
echo karsilama("Selim") . '<br/>'; // Merhaba Selim
function karsilama($ad = 'Kamil')
{
	return 'Merhaba ' . $ad;
}
echo $ad; // Hakan
echo '<br/>';
$sebze = 'patlican';
kozleme(); // Merhaba patlican

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

for ($i = 0; $i < 10; $i++) { // 0 1 2 3 4 5 6 7 8 9
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


echo disfonksiyon("Gülay"); // Günaydın Gülay
echo '<br/>';
echo icfonksiyon(); // Fatal error: Uncaught Error: Call to undefined function icfonksiyon() 
echo '<br/>';

function say($n) 
{
	if ($n < 30) {
		echo  $n . '<br/>';
		$n++;
		say($n);
	}
}

say(1); // 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29
