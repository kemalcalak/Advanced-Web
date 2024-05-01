<?php
//fonksiyonun içine class adini gönderdik.
function __autoload($classadi)
{
    //include dahil eder yoksa da devam eder
    //require gereklidir. Yoksa hata verir,devam etmez
    //require_once,include_once ilgili kodu 1 kez yükler her seferinde tekrar yükleme yapmaz.
    //yazdığımız kodda değişkenler varsa sıfırlama yapma durumunu da göz önünde bulundurularak hangisinin kullanılacağına karar verir.
    //classes diye bir dosya oluşturup bütün classları oraya koyup çekerseniz kolaylık sağlanır.
    require_once '/classes/' . $classadi . '.php';
}

//new den sonra gelen keyword class dır.
$gunaydin = new gunaydin('Hasan');
echo '<br/>';
$aksam = new iyiaksamlar('Jale');
?>