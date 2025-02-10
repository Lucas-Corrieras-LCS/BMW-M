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
            <img class="carx" src="images/galerie/M3-E92.jpg" alt="M3 E92">
        </div>
        <p class="M1000RR">La BMW M3 E92, produite entre 2007 et 2013, est une voiture de sport emblématique qui a
            marqué son époque. Issue de la gamme Série 3, elle incarne le parfait équilibre entre performance, luxe et
            plaisir de conduite. Avec son moteur V8 atmosphérique unique, son design agressif et ses technologies
            avancées, la M3 E92 reste une référence pour les amateurs de sensations fortes.
        </p>

        <p class="M1000RR">Sous le capot, cette M3 est équipée du légendaire V8 S65 de 4,0 litres, développant 420
            chevaux à 8 300 tr/min et un couple de 400 Nm. Capable d’atteindre les 100 km/h en seulement 4,6 secondes,
            elle offre des performances dignes d’une voiture de course, tout en conservant le confort et la polyvalence
            d’une berline sportive. Sa vitesse de pointe est limitée électroniquement à 250 km/h, mais peut atteindre
            280 km/h avec le pack M Driver.

            Son design distinctif est renforcé par des éléments exclusifs tels que le capot bombé, les ailes élargies,
            les quatre sorties d’échappement et le toit en fibre de carbone, réduisant le poids et abaissant le centre
            de gravité. À l’intérieur, l’habitacle allie luxe et sportivité, avec des sièges baquets en cuir, un volant
            M et des finitions haut de gamme.</p>

        <p class="M1000RR">Côté conduite, la M3 E92 propose deux transmissions : une boîte manuelle à 6 rapports pour
            les puristes et une boîte automatique M-DCT à 7 rapports pour des changements de vitesse ultra-rapides. Le
            châssis, parfaitement équilibré, associé à un différentiel actif M et à une suspension adaptative, garantit
            une expérience de conduite précise et immersive, aussi bien sur route que sur circuit.
        </p>

        <p class="M1000RR">Véritable chef-d’œuvre de BMW, la M3 E92 est souvent considérée comme l’une des dernières
            “vraies” M3, avant l’arrivée des moteurs turbocompressés. Son moteur V8 atmosphérique, ses lignes
            intemporelles et ses performances pures en font un modèle recherché par les passionnés et les
            collectionneurs du monde entier.
        </p>

        <button class="son" onclick="toggleSound(this,'sounds/M3E92.mp3')">Écouter le son</button>
    </main>

    <?php
    require('footer.php');
    ?>

    <script src="js/script.js"></script>
</body>

</html>