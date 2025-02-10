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


-
<div id="loading">
    <img src="images/BMWlogo.png" alt="BMW Logo" class="loading-logo">
</div>


    <?php
    require('header.php');
    ?>

    <main>
        <div>
            <img class="carx" src="images/galerie/bmw-m5-f90.avif" alt="M5 F90">
        </div>
        <p class="M1000RR">La BMW M5 F90 est la sixième génération de la légendaire M5, une berline sportive qui allie
            le luxe, la polyvalence et des performances dignes des meilleures voitures de sport. Lancée en 2017, la F90
            marque une étape importante dans l’histoire de la M5, introduisant pour la première fois une transmission
            intégrale M xDrive pour une motricité et une stabilité accrues.</p>

        <p class="M1000RR">Au cœur de la BMW M5 F90 se trouve un moteur V8 biturbo de 4,4 litres, capable de développer
            une puissance impressionnante de 600 chevaux et un couple de 750 Nm dans sa version standard. Dans les
            versions Competition, cette puissance grimpe à 625 chevaux, permettant des accélérations encore plus
            spectaculaires.

            Associée à une transmission automatique à 8 rapports (M Steptronic) et au système M xDrive, la M5 F90 passe
            de 0 à 100 km/h en seulement 3,4 secondes, et atteint les 200 km/h en 11,1 secondes. Sa vitesse maximale est
            limitée électroniquement à 250 km/h, mais peut être portée à 305 km/h avec le pack M Driver.</p>

        <p class="M1000RR">Le châssis de la M5 F90 est conçu pour offrir un équilibre parfait entre dynamisme et
            confort. Grâce à une suspension adaptative M, des freins haute performance et des réglages spécifiques à la
            compétition, la M5 offre une tenue de route précise, que ce soit sur route ou sur circuit.

            Les versions Competition bénéficient d’un châssis encore plus affûté avec une suspension abaissée de 7 mm,
            des barres stabilisatrices renforcées et des réglages d’amortissement optimisés pour une conduite encore
            plus sportive.</p>

        <button class="son" onclick="toggleSound(this,'sounds/M5F90.mp3')">Écouter le son</button>
    </main>

    <?php
    require('footer.php');
    ?>

    <script src="js/script.js"></script>
</body>

</html>