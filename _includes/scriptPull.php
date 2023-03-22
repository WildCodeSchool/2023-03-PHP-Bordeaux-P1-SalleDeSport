<?php
include "scriptDB.php";
// RECUPERATION DES DONNEES DE LA DB ET INTEGRATION DE CARD HTML
$sqlDrop = "SELECT nom, prenom, message FROM fiche_client ORDER BY id DESC  LIMIT 4";
$result = $conn->query($sqlDrop);

while($row = $result ->fetch_assoc()){
    echo '<div class="card-home">';
    echo '<img src="assets/images/fourthCom.png" alt="fourth comment" class="photo">';
    echo '<div><p class="text"> Nom : ' . $row["nom"] . '</p>';
    echo '<p class="text"> Prenom : ' . $row["prenom"] . '</p>';
    echo '<p class="text"> Message : ' . $row["message"] . '</p></div>';
    echo '</div>';
};