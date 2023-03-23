<?php include "scriptDB.php";
//EMISSION DE DONNEES A LA DB RECUPERE DU FORM
$name = mysqli_real_escape_string($conn, $_POST["name"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$message = $_POST["message"];

// REQUETE SQL D INSERTION DE DONNEES DANS LA DB
$sqlSend = "INSERT INTO fiche_client (nom, mail, message ) VALUES ('$name', '$email', '$message')";

//VERIFICATION DE L INSERTION DES DONNEES DANS LA DB
if (mysqli_query($conn, $sqlSend)) {
    header("Location: http://localhost:8000/sds-home.php");

} else {
    echo "Erreur: " . $sqlSend . "<br>" . mysqli_error($conn);
};
exit();
?>

