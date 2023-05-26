<?php

$mysqli = new mysqli('localhost', 'username', 'password', 'database');
$result = $mysqli->query("SELECT * FROM mahasiswa");
$row = $result->fetch_assoc();

$conn = new mtsqli($servername, $username, $password, $database);
if(!$conn) {
    die("Connection failed" . $conn->connect_error);
}
echo "Connected successfully";
$conn->close();

?>