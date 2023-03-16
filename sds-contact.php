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

        </form><!--<input class="submitMessage" type="submit" value="Envoyer">-->
            <div id="auCentre">
                <button onclick="document.getElementById('boiteD').style.display = 'block'" class="bouton noir">Afficher Informations</button>
                <div id="boiteD" class="boite">
                    <div class="boite-contenu animation-haut">
                        <header class="conteneur bleu" style="border-bottom:#000 2px solid;">
                            <span onclick="document.getElementById('boiteD').style.display = 'none'" class="bouton affichage">&times;</span>
                            <h2>Information</h2>
                        </header>
                        <div class="conteneur">
                            <p>Ce site est un site de divertissement..</p>
                            <p>Tous les outils sont organisés par catégories</p>
                            <p>Vous pouvez les parcourir à l'aide des menus</p>
                        </div>
                        <footer class="conteneur bleu" style="border-top:#000 2px solid;">
                            <p>Mentions légales</p>
                        </footer>
                    </div>
                </div>
            </div>

            <script type="text/javascript"></script>

        <div class="container-address">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2827.6734872846687!2d-0.5669889844913534!3d44.868941480984944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527cba74d1bdf%3A0xb92bcdcad0920688!2sWild%20Code%20School!5e0!3m2!1sfr!2sfr!4v1678953980112!5m2!1sfr!2sfr"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            <h3>Adresse</h3>
            <p>171 Rue Lucien Faure</p>
            <p> 33000 Bordeaux</p>
        </div>
    </div>
</div>



<?php
include "_includes/sds-footer.php"
?>
