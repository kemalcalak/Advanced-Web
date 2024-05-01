<?php
//setcookie: cookie oluşturur 1. parametre cookie adı, 2. parametre cookie değeri, 3. parametre cookie süresi eğer belirtilmezse oturum süresi boyunca geçerli olur
setcookie("kitap", "PHP", time() + 86400);
if (setcookie("yeni-kitap", "PHP&MYSQL")) 
    echo "Cookie oluşturuldu.<br/>";
else
    echo "Cookie oluşturulamadı.";
if (setcookie("web-kitap", "Dreamweaver", time() + 86400))
    echo "Cookie oluşturuldu.<br/>";
else
    echo "Cookie oluşturulamadı.<br/>";