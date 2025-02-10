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
            <img class="carx" src="images/galerie/M5-e39.jpeg" alt="BMW M5 E39">
        </div>
        <p class="M1000RR">La BMW M5 E39, produite entre 1998 et 2003, est une berline de luxe dotée de performances
            exceptionnelles. Sous le capot, elle cache un moteur V8 S62 de 4,9 litres développant 400 chevaux et 500 Nm
            de couple. Ce moteur lui permet d’atteindre les 100 km/h en 5,3 secondes et une vitesse maximale de 250 km/h
            (limitée électroniquement).
        </p>

        <p class="M1000RR">Son design est à la fois élégant et sportif, avec des ailes élargies, des prises d’air sur
            les pare-chocs et des quatre sorties d’échappement caractéristiques. À l’intérieur, la M5 E39 propose des
            sièges en cuir et des finitions en bois ou aluminium, alliant luxe et sportivité.</p>

        <p class="M1000RR">La voiture est équipée d’une boîte manuelle à 6 rapports, d’une suspension M et d’un
            différentiel à glissement limité, garantissant une expérience de conduite dynamique et précise. Avec une
            répartition des masses presque parfaite de 50:50, elle offre une excellente agilité pour une berline de sa
            taille.
        </p>

        <p class="M1000RR">La BMW M5 E39 est un modèle iconique, offrant des performances dignes d’une voiture de sport
            tout en conservant le confort d’une berline haut de gamme. C’est une référence dans le monde des berlines
            sportives, alliant puissance, raffinement et plaisir de conduite.
        </p>

        <button class="son" onclick="toggleSound(this,'sounds/M5E39.mp3')">Écouter le son</button>
    </main>

    <?php
    require('footer.php');
    ?>

    <script src="js/script.js"></script>
</body>

</html>