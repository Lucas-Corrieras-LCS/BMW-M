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
            <img class="carx" src="images/galerie/bmw-m5-e34-motor-v12.jpeg" alt="BMW M5 E34">
        </div>
        <p class="M1000RR">La BMW M5 E34, produite entre 1988 et 1995, est une berline de luxe haute performance qui a
            marqué l’histoire de BMW et de la gamme M. Elle représente l’une des premières grandes avancées de BMW dans
            le domaine des berlines sportives, en alliant confort, luxe et performances exceptionnelles. Ce modèle est
            souvent considéré comme un précurseur des M5 modernes, avec un mélange parfait de puissance et d’élégance.et
            d’atteindre les 100 km/h en 5,3 secondes et une vitesse maximale de 250 km/h
            (limitée électroniquement).
        </p>

        <p class="M1000RR">Sous le capot de la M5 E34 se trouve un moteur 6 cylindres en ligne S38 de 3,6 litres,
            développant 315 chevaux et un couple de 400 Nm. Grâce à ce moteur, la M5 E34 est capable d’atteindre les 100
            km/h en 6,3 secondes et d’atteindre une vitesse maximale d’environ 250 km/h (limitée électroniquement). Ce
            moteur, réputé pour sa robustesse et son agilité, est associé à une boîte manuelle à 5 rapports, permettant
            un contrôle total sur les performances.</p>

        <p class="M1000RR">Le design de la M5 E34 est typiquement BMW : élégant, sobre et intemporel. Les éléments
            distinctifs incluent des pare-chocs spécifiques, des jantes en alliage léger et des quatre sorties
            d’échappement qui viennent souligner son caractère sportif. À l’intérieur, l’habitacle luxueux offre une
            finition de haute qualité, avec des sièges en cuir, des commandes ergonomiques et un tableau de bord bien
            conçu. Le confort d’une berline haut de gamme est préservé, même à des vitesses élevées.
        </p>

        <p class="M1000RR">Côté dynamique, la M5 E34 dispose d’une suspension sport, d’un différentiel à glissement
            limité et d’un système de freinage hautes performances, garantissant une maniabilité et une stabilité
            exceptionnelles, tant sur route que sur circuit. Son comportement reste parfaitement équilibré grâce à une
            répartition des masses optimisée et une direction précise.
        </p>

        <button class="son" onclick="toggleSound(this,'sounds/M5E34.mp3')">Écouter le son</button>
    </main>

    <?php
    require('footer.php');
    ?>

    <script src="js/script.js"></script>
</body>

</html>