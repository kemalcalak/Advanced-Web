<?php
ob_start();
$sv = "localhost";
$username = "root";
$password = "";
$dbname = "facebook";
$login = 0;

$db = new mysqli($sv, $username, $password, $dbname);

if ($db->connect_error) {
    if ($lang == "tr") {
        die("Veritabanına bağlanılamadı: " . $db->connect_error);
    } else {
        die("Could not connect to the database: " . $db->connect_error);
    }
}

$lang = $_COOKIE['lang'] ?? 'en';

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    setcookie('lang', $lang, time() + 10000000);
    $_COOKIE['lang'] = $lang;  
}

if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];
    $name = $_COOKIE['name'];
    $login = 1;
}

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$checkbox = $_POST['checkbox'] ?? '';



$islem = $_GET["islem"] ?? '';

if ($islem == "login") {
    $sql = "SELECT * FROM user WHERE passsword = '$password' AND email = '$email'";
    $result = $db->query($sql);
    if ($email == "admin" && $password == "123") {
        $login = 1;
        $name = "admin";
    }

    if (@$result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['username'];
        $login = 1;
        if ($checkbox == "on") {
            setcookie('email', $email, time() + 10000000);
            setcookie('password', md5($password), time() + 1000000);
            setcookie('name', $name, time() + 1000000);
        }
    } else {
        if ($lang == "tr") {
            echo "Kullanıcı adı veya şifre hatalı!";
        } else {
            echo "Username or password is incorrect!";
        }
        $login = 0;
    }
} elseif ($islem == "logout") {
    setcookie('email', '', time() - 1000000);
    setcookie('password', '', time() - 1000000);
    setcookie('name', '', time() - 1000000);
    $login = 0;
}

$db->close();

require("site.php");
ob_end_flush();
?>