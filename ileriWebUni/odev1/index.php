<?php
$sv = "localhost";
$username = "root";
$password = "";
$dbname = "facebook";

require("site.html");
if (@$_COOKIE["email"] == "admin" && @$_COOKIE["password"] == md5("123")) {
	header("Location: home.php");
}


$islem = "";
if (isset($_GET["islem"])) {

	$islem = $_GET["islem"];
	if ($islem == "login") {
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
			setcookie('email', $email, time() + 100);
			setcookie('password', md5($password), time() + 100);
			header("Location: http://localhost/Advanced-Web/ileriWebUni/odev1/home.php");
		} else if ($_COOKIE["email"] == "admin" && $_COOKIE["password"] == md5("123")) {
			setcookie('email', $email, time() + 100);
			setcookie('password', md5($password), time() + 100);
			header("Location: home.php");
		} else {
			header("Location: http://localhost/Advanced-Web/ileriWebUni/odev1/index.php");
			echo "bağlantı başarısız";
		}
		$db->close();
	}
}
