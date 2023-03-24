<?php
include "scriptDB.php";

// RECUPERATION DES DONNEES DE LA DB ET INTEGRATION DE CARD HTML
$sqlDrop = "SELECT nom, prenom, message FROM fiche_client ORDER BY id DESC  LIMIT 4";
$result = $conn->query($sqlDrop);

// CREATION DE LA CARD COMMENTAIRE
    while($row = $result ->fetch_assoc()){
        echo '<div class="card-home">';
        echo '<img src="https://picsum.photos/200?rand=' . rand() . '" alt="fourth comment" class="photo">';
        echo '<div style="text-align: center;"><p><strong>' . $row["nom"] . '  ' .$row["prenom"].' </strong><p/>';
        echo '<p class="text">' . $row["message"] . '</p></div>';
        echo '</div>';
    };