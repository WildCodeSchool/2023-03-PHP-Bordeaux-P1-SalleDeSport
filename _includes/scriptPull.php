<?php
include "scriptDB.php";
// RECUPERATION DES DONNEES DE LA DB ET INTEGRATION DE CARD HTML
$sqlDrop = "SELECT nom, prenom, message ,img FROM fiche_client ORDER BY id DESC  LIMIT 4";
$result = $conn->query($sqlDrop);

while($row = $result ->fetch_assoc()){
    echo '<div class="card-home">';
    echo '<img src="' . $row['img'] . '" alt="fourth comment" class="photo">';
    echo '<div><p></p><strong>' . $row["nom"] . '  ' .$row["prenom"].' </strong><p/>';
    echo '<p class="text">' . $row["message"] . '</p></div>';
    echo '</div>';
};