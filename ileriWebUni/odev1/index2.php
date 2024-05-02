<?php
$sv = "localhost";
$username = "root";
$password = "";
$dbname = "facebook";

$db = new mysqli($sv, $username, $password, $dbname);

if ($db->connect_error) {
    die("bağlantı hatası: " . $db->connect_error);
}

@$email = $_POST['email'];
@$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE passsword = '$password' AND email = '$email' ";
$cikti = $db->query($sql);

if ($cikti->num_rows > 0) {
    echo "bağlantı başarılı";
} else {
    header("Location: http://localhost/Advanced-Web/ileriWebUni/odev1/index.php");
    echo "bağlantı başarısız";
}
$db->close();
?>
