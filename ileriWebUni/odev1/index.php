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
    $job = $_COOKIE['job'];
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
        $job = "admin";
    }

    if (@$result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['username'];
        $job = $row['job'];
        $login = 1;
        if ($checkbox == "on") {
            setcookie('email', $email, time() + 10000000);
            setcookie('password', md5($password), time() + 1000000);
            setcookie('name', $name, time() + 1000000);
            setcookie('job', $job, time() + 1000000);
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
    setcookie('job', '', time() - 1000000);
    $login = 0;
} elseif ($islem == "signup") {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $job = $_POST['job'] ?? '';

    if ($password != $confirm_password) {
        echo ($lang == "tr") ? "Şifreler eşleşmiyor!" : "Passwords do not match!";
    } else {
        $sql = "INSERT INTO user (username, email, passsword, job) VALUES ('$username', '$email', '$password', '$job')";
        if ($db->query($sql) === TRUE) {
            echo ($lang == "tr") ? "Kayıt başarılı!" : "Registration successful!";
        } else {
            echo ($lang == "tr") ? "Kayıt başarısız: " . $db->error : "Registration failed: " . $db->error;
        }
    }
}

$db->close();

require("site.php");
ob_end_flush();
?>