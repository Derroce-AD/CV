<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/CV.css?<?php echo time(); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example">

<div class="scrollSpy">
    <div id="side-nav">
      <ul class="nav nav-list affix">
        <li><a href="#start">Mon CV<br><sub></sub></a></li>
        <li><a href="#one">Compétences</a></li>
        <li><a href="#two">Expériences</a></li>
        <li><a href="#three">Formations</a></li>
      </ul>
    </div>
</div>

<main id="start">

    <div class="headGroup">
        <h1 class="title" >Mon CV</h1>
        <img class="imgProfile" src="./assets/pictures/portrait.jpeg" alt="">
    </div>
    <hr>
    <h2>Infos & Coordonnées</h2>
    <section class="coord">
    <div class="character">
            <img class="icon" src="./assets/pictures/character.png" alt="">
            <p>Arthur Descourvieres, <?php echo calculateAge('2003-01-01'); ?> ans</p>
        </div>
        <div class="adress">
            <img class="icon" src="./assets/pictures/iconPosition.png" alt="">
            <p>Marseille, France</p>
        </div>

        <div class="phone">
            <img class="icon" src="./assets/pictures/iconPhone.png" alt="">
            <p>07 50 02 81 40</p>
        </div>

        <div class="mail">
            <img class="icon" src="./assets/pictures/iconMail.png" alt="">
            <p>arthur.descourvieres@gmail.com</p>
        </div>

    </section>

    <h2 id="one">Compétences</h2>
    <div class="skill">
        <p>HTML</p>
        <div class="progress-bar">
            <div class="progress" data-value="100">
                <span class="progress-text">100%</span>
            </div>
        </div>
    </div>

    <div class="skill">
        <p>CSS</p>
        <div class="progress-bar">
            <div class="progress" data-value="90">
                <span class="progress-text">90%</span>
            </div>
        </div>
    </div>

    <div class="skill">
        <p>PHP</p>
        <div class="progress-bar">
            <div class="progress" data-value="70">
                <span class="progress-text">70%</span>
            </div>
        </div>
    </div>

    <div class="skill">
        <p>JS</p>
        <div class="progress-bar">
            <div class="progress" data-value="10">
                <span class="progress-text">10%</span>
            </div>
        </div>
    </div>

    
    <p>Logiciels utilisés :</p>
    <ul data-aos="zoom-in">
        <li >Sous Windows : <a href="https://code.visualstudio.com/">Vs Code</a> 
        (langage de code : Ruby, C++), <a href="https://www.adobe.com/fr/products/illustrator.html">Illustrator</a>,
        <a href="https://www.adobe.com/fr/products/photoshop.html">Photoshop</a> ,
        <a href="https://www.adobe.com/fr/products/indesign.html">InDesign</a>,
        <a href="https://www.adobe.com/fr/products/premiere.html">Premiere pro</a> et 
        <a href="https://www.audacityteam.org/download/windows/">Audacity</a>.</li>
        <li>Sous linux : <a href="https://jliljebl.github.io/flowblade/">Flowblade</a>,
        <a href="https://www.openshot.org/fr/download/">Openshot</a> et
        <a href="https://www.gimp.org/downloads/">Gimp</a>.</>
    </ul>

    <p>Logiciels avec un minimum de notions :</p>
    <ul data-aos="zoom-in">
        <li><a class="reaper" href="https://www.reaper.fm/">Reaper</a>, 
        <a class="excel" href="https://www.microsoft.com/fr-fr/microsoft-365/excel">Excel</a> 
        et <a class="fl" href="https://www.image-line.com/">FL-Studio</a> .
        </li>
        <li>Notions sur les logiciels de PAO (création graphique, prépresse), la pose d'adhésif, le flocage de vêtements, l'impression grand format, la fabrication et la pose d'enseigne, le covering de voiture.</li>
        <li>Notions sur des logiciels de montage vidéo, photo, audio, et une chaîne YouTube.</li>
    </ul>

    <h2 id="two">Expériences</h2>
    <ul>
        <li data-aos="flip-left">2021. Contrat d'apprentissage au sein de Albatros multimédia sur une durée de 2 ans (Entreprise spécialisé dans la création graphique, la signalétique et l'impression grand format).</li>
        <li data-aos="flip-right">2020. Contrat d'apprentissage au sein de Publand sur une durée de 8 mois à Marseille, (Entreprise d'impression sur tout support tel que pose d'adhésif sur véhicules, flocage sur textiles, fabrication d'enseignes lumineuses).</li>
        <li data-aos="flip-left">2018. Stage d'observation auprès de Valentin Audiovisuel à Montbéliard (Entreprise d'audiovisuel), durant la même période plusieurs courts métrages tournés indépendamment.</li>
    </ul>

    <h2 id="three">Formations</h2>
    <ul data-aos="fade-up"
    data-aos-duration="500">
        <li>Parcours tremplin numérique.</li>
        <li>Apprentissage BAC PRO AMA CV (Artisanat et Métiers d'Art option communication visuelle plurimédia).</li>
    </ul>
</main>
<footer>
    <a href="../1/Portfolio/PHP/index.php">Mon portfolio</a>
</footer>
    <!-- DWNLD BUTTON -->
    <a href="./assets/cv.pdf" class="download-button" download>
        Télécharger mon CV
    </a>

    <script src="script.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>AOS.init();</script>

</body>
</html>

<?php
function calculateAge($birthDate) {
    $birthDate = new DateTime($birthDate);
    $today = new DateTime('today');
    $age = $today->diff($birthDate)->y;
    return $age;
}
?>





</body>
