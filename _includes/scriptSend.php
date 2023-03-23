<?php include "scriptDB.php";
//EMISSION DE DONNEES A LA DB RECUPERE DU FORM
$name = mysqli_real_escape_string($conn, $_POST["name"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$message = $_POST["message"];

$sqlSend = "INSERT INTO fiche_client (nom, mail, message ) VALUES ('$name', '$email', '$message')";

if (mysqli_query($conn, $sqlSend)) {
    echo "OK";
} else {
    echo "Erreur: " . $sqlSend . "<br>" . mysqli_error($conn);
};
?>