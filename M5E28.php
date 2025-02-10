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
            <img class="carx" src="images/galerie/bmw-m5-e28.jpg" alt="M5 E28">
        </div>
        <p class="M1000RR">La BMW M5 E28, produite entre 1984 et 1988, est la première génération de la M5, un modèle
            qui a marqué un tournant dans l’histoire des berlines de performance. Basée sur la Série 5 E28, la M5 E28 a
            été conçue pour combiner les performances d’une voiture de sport avec le confort et la praticité d’une
            berline de luxe. Son développement est directement inspiré des performances de BMW en compétition, notamment
            en endurance et en rallye, et elle est rapidement devenue un modèle iconique dans l’histoire de la marque.
        </p>

        <p class="M1000RR">Sous le capot, la M5 E28 est équipée d’un moteur 6 cylindres en ligne M88/3 de 3,5 litres,
            dérivé de celui de la BMW 3.0 CSL de course. Ce moteur développe 286 chevaux et 340 Nm de couple, ce qui
            permet à la voiture d’atteindre une vitesse maximale de 250 km/h et de passer de 0 à 100 km/h en environ 6,5
            secondes, des chiffres impressionnants pour l’époque.</p>

        <p class="M1000RR">Le design de la M5 E28 est élégant mais discrètement sportif. Elle conserve la silhouette
            classique de la Série 5 avec des lignes angulaires et un caractère affirmé grâce à des pare-chocs plus
            larges, des jantes spécifiques, ainsi que des quatre sorties d’échappement qui marquent sa différence. À
            l’intérieur, l’habitacle allie luxe et sportivité avec des sièges en cuir, un tableau de bord orienté vers
            le conducteur et une finition soignée.
        </p>

        <p class="M1000RR">Bien que la M5 E28 ne soit pas aussi puissante que les modèles qui lui succéderont, elle a
            posé les bases de ce qui deviendra la lignée des M5 modernes. Sa combinaison de performances de pointe et de
            confort fait d’elle une voiture très recherchée par les collectionneurs aujourd’hui. La BMW M5 E28 est une
            voiture pionnière qui a contribué à l’établissement de BMW en tant que référence dans le monde des berlines
            sportives.
        </p>

        <button class="son" onclick="toggleSound(this,'sounds/M5E28.mp3')">Écouter le son</button>
    </main>

    <?php
    require('footer.php');
    ?>

    <script src="js/script.js"></script>
</body>

</html>