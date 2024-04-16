<?php
$islem = "";
if (isset($_GET["islem"]))
    $islem = $_GET["islem"];

if ($islem == "basla") {
    $yaricap = $_POST['yaricap'];
    class MerhabaDunya
    {
        function yazdir()
        {
            echo "Merhaba Dünya";
        }
    }
    $merhaba = new MerhabaDunya();
    $merhaba->yazdir();
    echo "<br/><br/>";

    class Selam
    {
        function yazdir($isim)
        {
            echo "Hoşgeldin" . $isim;
        }
        //static tanımlanmış fonksiyonu çağırmak için nesneye ihtiyaç yoktur sınıf üzerinden çağrılabilir.
        static function deneme()
        {
            echo "Direk Çağır";
        }
    }
    Selam::deneme();
    echo "<br/>";
    $selam = new Selam();
    $selam->yazdir("Hasan"); //fonksiyonu çağırmak için yukarıda bir nesne oluşturduk ve nesne ile fonksiyonu çağırdık.

    echo "<br/><br/>";
    class Merhaba
    {
        //public doğrudan ilgili sınıfın içinde tanımlanmış değişken dışardan erişime açıktır
        //private dışarıdan erişilemez
        //protected miraslama için kullanılır.
        public $isim = "Mehmet";
        function yazdir()
        {
            //dışarıdan bir değişkene erişilirken this keywordünü kullanmamız gerekir.ilgili sınıf üzerinden nesneye atıf yapan bir işaretçidir.Sınıfın içerisinde bir değişken var aynı isimde bir de sınfın methodunda bir değişken varsa ilgili method içerisinde methodları karıştırmamak adına sınıf değişkenini belirtirken this kullanılır.
            echo "Hoşgeldin" . $this->isim;
        }
    }
    $merhabalar = new Merhaba();
    $merhabalar->yazdir();
    echo "<br/><br/>";
    echo $merhabaisim->isim;

    class Hesapla
    {
        public $pi = 3.14;
        function cevrehesapla($yaricap)
        {
            echo 'Cevre:' . (2 * $this->pi * $yaricap);
        }
        function alanhesapla($yaricap)
        {
            echo 'Alan: ' . ($this->pi * $yaricap * $yaricap);
        }
    }
    echo "<br/><br/>";
    $daire = new Hesapla();
    $daire->cevrehesapla($yaricap);
    echo "<br/><br/>";
    $daire->alanhesapla($yaricap);

    class Yapici
    {
        public $deneme = 'Yes';
        private $ozel = "Özel";
        private $isim = "Hasan";
        //sınıfın ismi ile tanımlanan fonsiyon yapıcı(contructer) fonksiyondur
        function Yapici($isim)
        {
            echo "Yapıcı Örneğe Hoşgeldiniz" . $isim;
        }
        function __construct($isim)
        {
            echo "Yapıcı Örneğe Hoşgeldiniz" . $isim;
        }
        //yıkıcı fonksiyondur ->destructer
        function __destruct()
        {
            echo 'Güle güle ' . $this->ozel . "insan";
        }
    }
    echo "<br/><br/>";
    $yapici = new Yapici('Dayi');
    echo "<br/>br/>";
    echo $yapici->deneme . '<br/>';
    echo "<br/>";
    //echo $yapici->ozel.'<br/>';
    echo "<br/>";
    unset($yapici); //değişken yok edildi(destruct fonksiyonunu çağırıp yok etme yapar ekrana güle güle yazdırılır)
    echo "<br/>";
    //echo $yapici->deneme . '<br/>'; //nesne silindiği için hata verir
} else {
    echo '<form name="form1" method="POST" action="index27.php?islem=basla">
		<input type="text" name"yaricap"/>
		<input type="submit" value="Hesapla"/>
		</form>';
}
//Fonksiyon dışındaki değişkene fonksiyon içinden erişmek için globak keywordü kullanır.
