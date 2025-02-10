<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Partenaires</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>



<div id="loading">
    <img src="images/BMWlogo.png" alt="BMW Logo" class="loading-logo">
</div>



    <?php
    require('header.php');
    ?>

    <main>
        <div>
            <img class="carx" src="images/galerie/M5-E60.jpeg" alt="M5 E60">
        </div>
        <p class="M1000RR">La BMW M5 E60 est une berline sportive légendaire, produite entre 2005 et 2010, et fait
            partie de la cinquième génération de la Série 5 de BMW. Elle est souvent considérée comme l’une des M5 les
            plus emblématiques, grâce à son mélange unique de luxe, de technologie avancée et de performances extrêmes.
        </p>

        <p class="M1000RR">La M5 E60 se distingue par son design élégant et agressif, avec des lignes épurées qui
            incarnent l’esprit de BMW. Ses éléments spécifiques “M” incluent des prises d’air élargies, quatre sorties
            d’échappement distinctives et des jantes en alliage exclusives. Son aérodynamisme est subtilement optimisé
            pour offrir stabilité et performance, tout en maintenant une allure sophistiquée.

            À l’intérieur, l’habitacle est un parfait mélange de luxe et de sportivité, avec des sièges en cuir
            spécialement conçus pour offrir confort et maintien latéral. Les finitions haut de gamme, le volant M
            spécifique et les nombreuses options technologiques, comme le système iDrive, rendent chaque trajet aussi
            agréable qu’excitant.</p>

        <p class="M1000RR">Le véritable joyau de la BMW M5 E60 est son moteur. Elle est équipée d’un V10 atmosphérique
            de 5,0 litres, dérivé des technologies issues de la Formule 1. Ce moteur développe une puissance
            impressionnante de 507 chevaux à 7 750 tr/min et un couple de 520 Nm, permettant à la voiture d’atteindre
            une vitesse de pointe de 250 km/h (limitée électroniquement) ou 305 km/h avec le pack M Driver.
        </p>

        <p class="M1000RR">La BMW M5 E60 reste une icône parmi les amateurs de voitures, grâce à son moteur V10 unique
            (le seul de
            l’histoire des M5) et son caractère inimitable. Elle est souvent saluée pour avoir repoussé les limites des
            berlines sportives de son époque, tout en conservant l’élégance et la polyvalence typiques de la Série 5.
        </p>

        <button class="son" onclick="toggleSound(this,'sounds/M5E60.mp3')">Écouter le son</button>
    </main>

    <?php
    require('footer.php');
    ?>

    <script src="js/script.js"></script>
</body>

</html>