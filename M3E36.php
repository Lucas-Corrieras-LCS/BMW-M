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
            <img class="carx" src="images/galerie/M3-e36.avif" alt="BMW M3 E36">
        </div>
        <p class="M1000RR">La BMW M3 E36, produite entre 1992 et 1999, est une berline sportive qui a marqué un tournant
            dans l’histoire de la gamme M. Elle a introduit un nouveau niveau de performance et de technologie pour les
            voitures de sport de sa catégorie. Conçue sur la base de la Série 3 E36, la M3 E36 est devenue une référence
            pour les amateurs de conduite sportive, offrant un équilibre parfait entre puissance, maniabilité et
            confort.
        </p>

        <p class="M1000RR">Sous le capot, la M3 E36 abrite un moteur 6 cylindres en ligne S50 de 3,0 litres pour la
            version de base, développant 286 chevaux et un couple de 320 Nm. Cette version permet à la voiture
            d’atteindre les 100 km/h en 6,1 secondes, avec une vitesse maximale avoisinant les 250 km/h. La version M3
            E36 3,2 (M3 Evolution) avec son moteur S52 passe à 321 chevaux, offrant encore plus de sensations.
        </p>

        <p class="M1000RR">Le design de la M3 E36 est plus moderne que celui de ses prédécesseurs, avec des lignes
            nettes et une silhouette plus aérodynamique. Les éléments distinctifs incluent les ailettes de pare-chocs,
            les jantes spécifiques et les quatre sorties d’échappement, propres à la gamme M. À l’intérieur, l’accent
            est mis sur la sportivité, avec des sièges baquets, un volant M et des finitions qui combinent ergonomie et
            luxe.
        </p>

        <p class="M1000RR">La M3 E36 est équipée d’une boîte manuelle à 5 rapports pour une conduite plus engageante, et
            elle dispose également d’une suspension sportive et d’un différentiel à glissement limité pour améliorer la
            tenue de route et la réactivité. Son châssis, bien équilibré, avec une répartition des masses optimisée,
            assure une conduite agile et précise.
        </p>

        <button class="son" onclick="toggleSound(this,'sounds/M3E36.mp3')">Écouter le son</button>
    </main>

    <?php
    require('footer.php');
    ?>

    <script src="js/script.js"></script>
</body>

</html>