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
            <img class="carx" src="images/galerie/bmw-e46-m3-.jpeg" alt="M3 E46">
        </div>
        <p class="M1000RR">La BMW M3 E46, produite entre 2000 et 2006, est une voiture culte qui incarne l’essence même
            des sportives de la gamme M. Ce modèle, basé sur la troisième génération de la Série 3, est reconnu pour son
            design intemporel, ses performances exceptionnelles et son caractère puriste. Véritable icône des années
            2000, la M3 E46 reste une référence incontournable pour les amateurs de conduite.
        </p>

        <p class="M1000RR">Sous le capot, la M3 E46 est équipée du mythique 6 cylindres en ligne S54 de 3,2 litres. Ce
            moteur, entièrement conçu pour la performance, développe 343 chevaux à 7 900 tr/min et un couple maximal de
            365 Nm à 4 900 tr/min. Grâce à sa sonorité enivrante et ses montées en régime spectaculaires, ce bloc
            atmosphérique est souvent considéré comme l’un des meilleurs jamais produits par BMW. La voiture atteint les
            100 km/h en 5,1 secondes et est limitée électroniquement à une vitesse de pointe de 250 km/h.

            Le design de la M3 E46 est un chef-d’œuvre d’équilibre et d’agressivité. Ses éléments caractéristiques
            incluent un capot bombé, des ailes élargies, des prises d’air spécifiques et une quadruple sortie
            d’échappement, toutes signatures de la gamme M. À l’intérieur, l’ambiance sportive se mêle au luxe, avec des
            sièges baquets en cuir, un volant M et des finitions haut de gamme.</p>

        <p class="M1000RR">Deux types de transmission étaient disponibles : une boîte manuelle à 6 rapports, idéale pour
            les puristes, et une boîte SMG II à 6 rapports robotisés, qui offrait des changements de vitesse rapides et
            précis grâce à ses palettes au volant. En complément, le différentiel à glissement limité et le châssis
            équilibré avec une répartition parfaite des masses 50:50 garantissent une tenue de route exemplaire, aussi
            bien sur route que sur circuit.
        </p>

        <p class="M1000RR">Des versions spéciales, comme la M3 CSL (Coupé Sport Leichtbau), ont renforcé la renommée de
            la E46. Produite en édition limitée, la CSL est une version allégée et encore plus performante, avec un
            poids réduit grâce à l’utilisation de fibre de carbone et une puissance portée à 360 chevaux. Son caractère
            exclusif et ses performances en font un véritable objet de collection.
        </p>

        <button class="son" onclick="toggleSound(this,'sounds/M3E46.mp3')">Écouter le son</button>
    </main>

    <?php
    require('footer.php');
    ?>

    <script src="js/script.js"></script>
</body>

</html>