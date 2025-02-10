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
            <img class="carx" src="images/galerie/BMW-M3-Sport-Evolution.jpeg" alt="BMW M3 E30">
        </div>
        <p class="M1000RR">La BMW M3 E30, produite entre 1985 et 1992, est l’une des voitures les plus emblématiques de
            l’histoire de BMW et de la gamme M. C’est la première génération de M3 et elle a marqué le début d’une
            légende, tant sur la route que sur circuit. Conçue à l’origine pour la compétition, la M3 E30 a rapidement
            acquis une réputation de voiture sportive exceptionnelle, alliant performances brutes et maniabilité.
        </p>

        <p class="M1000RR">Sous le capot, la M3 E30 est équipée d’un moteur 4 cylindres en ligne S14 de 2,3 litres,
            développant 200 chevaux et un couple de 240 Nm. Ce moteur permet à la M3 E30 d’atteindre les 100 km/h en
            environ 6,7 secondes et une vitesse maximale de 235 km/h. Bien que moins puissant que les modèles plus
            modernes, son caractère vif et sa sonorité unique en font une voiture qui procure des sensations fortes et
            un plaisir de conduite pur.
        </p>

        <p class="M1000RR">Le design de la M3 E30 est immédiatement reconnaissable, avec ses ailes élargies, ses jantes
            spécifiques, ses prises d’air sur les ailes et ses quatre sorties d’échappement. Ces éléments, ajoutés à sa
            silhouette compacte et anguleuse, lui confèrent une présence imposante malgré sa taille réduite. À
            l’intérieur, l’accent est mis sur la sportivité, avec des sièges baquets en tissu ou en cuir, un volant
            sport, et des équipements orientés vers la performance.
        </p>

        <p class="M1000RR">Ce modèle a également eu une version plus puissante, la M3 Evolution, qui développe 220
            chevaux et inclut des modifications pour améliorer les performances, comme un allègement de la voiture et
            des améliorations aérodynamiques. La M3 E30 est également célèbre pour ses succès en compétition, notamment
            en Tourisme et en Rallye, où elle a remporté de nombreux titres.
        </p>

        <button class="son" onclick="toggleSound(this,'sounds/M3E30.mp3')">Écouter le son</button>
    </main>

    <?php
    require('footer.php');
    ?>

    <script src="js/script.js"></script>
</body>

</html>