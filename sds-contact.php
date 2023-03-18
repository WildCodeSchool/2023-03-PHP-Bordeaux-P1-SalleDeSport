<?php
include "_includes/sds-header.php";
?>
<div class="main-contact">
    <div class="container-contact">
        <h2>Pour nous contacter</h2>
        <input class="input" type="text" placeholder="Name">
        <input class="input" type="email" placeholder="mon.email@exemple.com">
        <textarea class="input textarea" name="textarea" placeholder="Votre message" cols="30" rows="5">
            </textarea>
        <button onclick="openAlert()" class="input submit">Submit
        </button>
        <div class="box">
            <div class="dialogBox">
                <div class="dialogBox-title">
                    <div onclick="closeAlert()" class="close">&times;</div>
                    <h4>Information</h4>
                </div>
                <p>Nous avons bien reçu votre message. Nous en prenons connaissances</p>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2827.6734872846687!2d-0.5669889844913534!3d44.868941480984944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527cba74d1bdf%3A0xb92bcdcad0920688!2sWild%20Code%20School!5e0!3m2!1sfr!2sfr!4v1678953980112!5m2!1sfr!2sfr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="adress">
            <p>Adresse</p>
            <p>171 Rue Lucien Faure</p>
            <p> 33000 Bordeaux</p>
        </div>
    </div>
</div>

<script>
    let alert = document.querySelector(".box")

    function openAlert() {
        alert.style.display = 'block'
    }

    function closeAlert() {
        alert.style.display = 'none'
    }
</script>
<?php
include "_includes/sds-footer.php"
?>
