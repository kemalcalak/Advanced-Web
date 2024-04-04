<?php
//Bir fonksiyon birden fazla parametre ile çalışıyorsa buna overload fonksiyon denir.(mysqli_connect fonksiyonu 4 parametre de 5 parametrede aldığı için overload fonksiyondur.)
//override :hükmünü kaldırmak anlamına gelir.En çok miraslama durumlarında karşılaşırız. 

class merhabadunya
{
	public $durum="İyi misin?";
	function merhaba($isim)
	{
		echo 'Merhaba'.$isim.'<br/>';
	}
}
//merhabadunya sınıfının özelliklerini de kendi bünyesine katmış oldu.
class yenimerhabadunya extends merhabadunya
{
	function nasilsin()
	{
		//public olan değişkene her yerden erişim var public $durum.extends ile miraslama yapıldı.
		echo "Nasılsın?".$this->durum.'<br/>';
	}
}
$kerim=new yenimerhabadunya();
$kerim->merhaba('kerim');
$kerim->nasilsin();

class OdemeYap
{
	public $kira=500;
	public $maas=1200;
	public $kalan;
	function FaturalariOde($elektrik,$su,$telefon)
	{
		echo 'Kira: '.$this->kira.'TL<br/>';
		$faturalar=$elektrik+$su+$telefon;
		echo 'Faturalar: '.$faturalar.'TL<br/>';
		$odemeler=$this->kira+$faturalar;
		echo 'Ödemeler: '.$odemeler.'TL<br/>';
		$this->kalan=$this->maas-$odemeler;
		echo 'Kalan: '.$this->kalan.'TL<br/>';
	}

}
class Harcama extends OdemeYap
{
	function HarcamaYap($harcama)
	{
		echo 'Harcama: '.$harcama.'TL<br/>';
		$this->kalan-=$harcama;
		echo 'Harcamadan sonra kalan: '.$this->kalan.'TL <br/>';
	}
}

$klasim=new Harcama();
$klasim->FaturalariOde(50,20,30);
echo "<br/>";
$klasim->HarcamaYap(200);

//yeni bir nesne oluşturulduğunda değerler ilgili nesne için yeniden oluşturulur.
$odeme=new OdemeYap();
echo "Kira ödemesi ".$odeme->kira.'<br/><br/><br/>';
echo "Kalan Para: ".($odeme->maas-$odeme->kira).'<br/><br/><br/>';

class Asker 
{
	public $anaisim;
	function __construct($isim)
	{
		$this->anaisim=$isim;
	}
	function selam()
	{
		echo "Selam Asker: ".$this->anaisim.'<br/>';
	}
}

//sınıfının kendi constructerı yoksa extendslediği sınıftan çeker. class dan oluşturulan nesne kendi clasının içindeki fonksiyonunu çalıştırır.
class Yuzbasi extends Asker 
{
	function selam()
	{
		echo "Selam Yüzbaşı: ".$this->anaisim.'<br/>';
	}
}
class Binbasi extends Asker
{
	function selam()
	{
		echo "Selam Binbasi: ".$this->anaisim.'<br/>';
	}
}
$asker=new Asker('Hasan');
$asker->selam();
$yuzbasi=new Yuzbasi('Cemal');
$yuzbasi->selam();
$binbasi=new Binbasi('Selim');
$binbasi->selam();
?>