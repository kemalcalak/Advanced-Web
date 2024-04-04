<?php
/*
$kime="Celal Atalar <celalatalar@hotmail.com>";
$konu="Deneme";
$mesaj="Merhaba";
$ekbaslik="From: Subway Surf <admin@subwaysurfers.web.tr>\n";
$ekbaslik.="Cc: Atalar Celal <celalatalar@yahoo.com>\n";
$ekbaslik.='Content-type:text/html; charset="utf-8"\n';
if(mail($kime,$konu,$mesaj,$ekbaslik))
	echo "Mail Gönderildi";
else
	echo "Mail Gönderilemedi";
*/

/*
$to="Celal Atalar <celalatalar@hotmail.com>";
$subject="HTML Sayfa Mail Gönderimi Örneği";
$message='<html><head></head><body>';
$message.='<font face="verdana" size="4" color="blue">';
$message.='<b>PHP Kitabı</b></font><br/>';
$message.='<font face="arial" size="3" color="red">';
$message.='Erkan Balaban</font><br/>';
$message.='<font face="tahoma" size=3><i>';
$message.='Pusula Yayıncılık</i></font><br/>';
$headers='From:admin@subwaysurfers.web.tr\n';
$headers.='MIME-Version:1.0\n'; 
$headers.='Content-type:text/html; charset="utf-8"\n';
if(mail($to,$subject,$message,$headers))
	echo "Mail Gönderildi";
else
	echo "Mail Gönderilemedi";
*/
$icerik = '<html><head></head><body>
<font face="verdana" size="4" color="blue">
<b>PHP Kitabı</b></font><br/>
<font face="arial" size="3" color="red">
Erkan Balaban</font><br/>
<font face="tahoma" size=3><i>
Pusula Yayıncılık</i></font><br/></body></html>';
include("class.phpmailer.php");
include("class.smtp.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1; // hata ayiklama: 1 = hata ve mesaj, 2 = sadece mesaj
$mail->SMTPAuth = true; // oturum açmaya hazırlık
$mail->SMTPSecure = 'tls'; // Güvenli baglanti için ssl normal baglanti için tls olmalıdır.
$mail->Host = "mail.oyunskorlarim.com"; // Mail sunucu ismi girilmelidir.
$mail->Port = 587; // Güvenli baglantı için 465 Normal baglantı için 587
$mail->IsHTML(true); // belgeyi html tabanlı yapma
$mail->SetLanguage("tr", "phpmailer/language"); //dil
$mail->CharSet = "utf-8"; //karakter kodu
$mail->Username = "admin@oyunskorlarim.com"; // Mail adresimizin kullanicı adı
$mail->Password = "87hEin7B8SUnJMv"; // Mail adresimizin şifresi
$mail->SetFrom("admin@oyunskorlarim.com", "Oyun Skor"); // Mail gönderildiğinde görülecek olan isim
$mail->AddAddress("atalarcelal@gmail.com"); // Gönderilecek adres - Alıcı hotmail junk
$mail->Subject = "Html Tabanlı"; // Konu başlığı
$mail->Body = $icerik; // Mailin içeriği
if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Mesaj gonderildi";
}
