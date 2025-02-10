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
            <img class="carx" src="images/galerie/M4-F82.jpeg" alt="M4 F82">
        </div>
        <p class="M1000RR">La BMW M4 F82 est une voiture de sport haute performance, lancée en 2014, et fait partie de
            la série 4 de BMW. Elle incarne l’élégance et la puissance, avec un design extérieur musclé et
            aérodynamique, alliant des courbes sportives à une silhouette agressive. Son capot long et ses ailes
            élargies accentuent son apparence de voiture de course, tandis que la calandre avant et les phares effilés
            ajoutent une touche de modernité.</p>

        <p class="M1000RR">Sous le capot, la M4 F82 est équipée d’un moteur 6 cylindres en ligne turbo de 3,0 litres,
            produisant entre 431 et 503 chevaux (en fonction de la version, standard ou compétition), couplé à une
            transmission manuelle à 6 vitesses ou automatique à double embrayage. Cela lui permet d’atteindre des
            performances impressionnantes, avec un 0 à 100 km/h en seulement 3,8 secondes pour la version Compétition.

            À l’intérieur, la M4 F82 se distingue par son habitacle sportif mais raffiné, avec des sièges en cuir, des
            finitions haut de gamme et des éléments spécifiques comme le volant sport M. Le système multimédia est
            sophistiqué, avec un écran tactile et des commandes intuitives, tout en offrant des options de connectivité
            modernes.</p>

        <p class="M1000RR">Côté conduite, la BMW M4 F82 offre une expérience dynamique exceptionnelle grâce à son
            châssis affiné, sa direction précise et sa suspension adaptable, permettant une conduite sportive sur
            circuit tout en restant confortable pour un usage quotidien. La version Compétition renforce encore la
            performance, avec un poids réduit et une meilleure gestion de la puissance.</p>

        <button class="son" onclick="toggleSound(this,'sounds/M4F82.mp3')">Écouter le son</button>
    </main>

    <?php
    require('footer.php');
    ?>

    <script src="js/script.js"></script>
</body>

</html>