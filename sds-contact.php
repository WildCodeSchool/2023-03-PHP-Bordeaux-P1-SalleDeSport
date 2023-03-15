<?php
include "_includes/sds-header.php";
?>
<div class="main-contact">
    <div class="container-contact">
        <h2>Pour nous contacter</h2>
        <form id="contactForm" class="container-form">
            <input class="input" type="text" placeholder="Name"><br>
            <input class="input" type="email" placeholder="mon.email@exemple.com"><br>
            <textarea class="textarea" name="textarea" placeholder="Votre message" cols="30" rows="5"></textarea><br>
            <input class="submitMessage" type="submit" value="Envoyer">
        </form>
        <div class="container-address">
            <img src="assets/images/Map.png" alt="Map">
            <h3>Adresse</h3>
            <p>171 Rue Lucien Faure</p>
            <p> 33000 Bordeaux</p>
        </div>
    </div>
</div>
<script src="/assets/js/script.js"></script>

<?php
include "_includes/sds-footer.php"
?>
