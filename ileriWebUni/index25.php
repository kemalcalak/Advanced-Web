<?php
//Arama Motoru Optimizasyonu (SEO), Web sitelerinin arama motorlarında daha iyi performans göstermesi için yapılan çalşmaların tümüne verilen isimdir.
//SEO aynı zamanda Arama Motoru Optimizasyonu’nun ingilizce karşılığı olan Search Engine Optimization (SEO) kelimelerinin kısaltılmış biçimidir.
//Web sitenizin arama motoru sonuç sayfasýnda (SERP) daha iyi sıralamalar elde etmesi için sürekli geliştirmeler yapma sürecidir. SEO sayesinde web sitenizin performansını artırabilir daha fazla ziyaretçiye ulaşabilirsiniz.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://WWW.w3.org/1999/xhtml">

<head>
    <meta http-aquive="Content-Type" content="text/html" ; charset="utf-8" />
    <title>Üye Kayıt</title>
</head>

<bod>
    <?php
    $islem = "";
    //yukarıdaki url e kontrol edilir islem diye değişken var mý diye
    //isset ile de böyle bir değiþken tanımlanmış mı diye kontrol edilir.
    if (isset($_GET["islem"]))
        $islem = $_GET["islem"];
    if ($islem == "kayit") {
        $host = "localhost";
        $mysqladi = "root";
        $mysqlsifre = "";
        $veritabaniadi = "subwaysurf";
        $mysqlebaglan = mysqli_connect($host, $mysqladi, $mysqlsifre, $veritabaniadi);
        mysqli_set_charset($mysqlebaglan, "utf-8");
        $kullaniciadi = $_POST["kadi"];
        $mail = $_POST["mail"];
        $sifre = $_POST["sifre"];

        $tarih = time();
        //dışarıdan girilen kullanıcı adının user tablosunda kullanıcılar arasında olup olmadığı kontrol edilir
        $sor = "select * from users where nick='$kullaniciadi'";
        //dönen sonuç kümesini (mysqli_query) ile alırız.
        //mysqli_num_rows() ile dönen verilerin sayısının kaç tane olduðunu buluruz.
        $kontrol = mysqli_num_rows(mysqli_query($mysqlebaglan, $sor));
        if ($kontrol < 1) {
            //şifreler md5 ile alınır yani şifreli şekilde alınır adminin görmesi engellenir.
            $ekle = "INSERT INTO users(nick,email,password,signtime) values('$kullaniciadi','$mail',md5('$sifre'),'$tarih')";
            mysqli_query($mysqlebaglan, $ekle);
            mysqli_close($mysqlebaglan);
            header("location:index25.php");
        } else {
            echo "Aynı kullanıcı var";
            echo '<meta gttp-equiv="refresh" content="3;url=index25.php"><h3>Ana Sayfa</h3>';
        }
    } else {
    ?>
        <form action="index25.php?islem=kayit" name="uyekayit" method="post">
            <table width="335" height="225" border="1">
                <thead>ÜYE FORMU</thead>
                <tr>
                    <td width="91">Kullanıcı Adı</td>
                    <td width="232" align="center"><input type="text" name="kadi" /></td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td align="center"><input type="email" name="mail" /></td>
                </tr>
                <tr>
                    <td>Þifre</td>
                    <td align="center"><input type="password" name="sifre"></td>
                </tr>

                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Gönder" /></td>
                </tr>
            </table>
        <?php
    }
        ?>
        </form>
</bod>

</html>