<?php
//CONNECTION AU SERVEUR DE LA DB
$servername = "localhost";
$username = "CHADO";
$password = "wow";
$dbname = "body_and_soul";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_errno){
    die("connection failed:" . $conn->connect_errno);
}




?>
