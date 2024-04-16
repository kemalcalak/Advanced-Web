<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facebook";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

@$email = $_POST['email'];
@$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE passsword = '$password' AND email = '$email' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login Successful";
} else {
    header("Location: http://localhost/Advanced-Web/ileriWebUni/odev1/index.php");
    echo "Login Failed";

}

$conn->close();
?>