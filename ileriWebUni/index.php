<?php
    echo "Hello World <br />";  // Hello World
    $kitap="Php & Mysql"; 
    echo $kitap."<br/>"; 
    //echo '$degisken'; 
    $ifade ="Bu sene 2.sınıflar çok çalışkan";
    $parca=mb_substr($ifade,5,17,"UTF-8"); //cevap: 2.sınıflar çok
    echo $parca."<br/>";
    $x=strstr($parca,"lar"); //cevap: lar çok
    echo $x."<br/>";
    echo strlen($x); //cevap: 7
    
?>