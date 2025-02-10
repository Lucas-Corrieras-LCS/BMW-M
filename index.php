<!DOCTYPE html>
<html lang="fr">

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <title>Accueil</title>
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
        <video autoplay muted loop id="background-video">
            <source src="images/M5F.mp4" type="video/mp4">
        </video>

        <h1 id="BMWM">BMW M PERFORMANCE</h1>

        <div id="pres">
            <p id="txt">BMW M est une filiale de BMW AG fondée en 1972. Elle est
                spécialisée dans la conception et la production de véhicules de sport de la marque BMW. La lettre M
                signifie « Motorsport ».
                Les véhicules M sont des versions sportives des modèles de série de BMW. Ils sont reconnaissables par
                leur logo M, une bande tricolore bleu, rouge et bleu, qui symbolise les couleurs de la Bavière. Les
                véhicules M sont assemblés dans l'usine de Munich, en Allemagne.
                Les véhicules M sont conçus pour offrir des performances supérieures à celles des modèles de série de
                BMW.
        </div>

        <div id="divimg">
            <img class="img2" src="images/M2.jpg" alt="BMW M2">
            <img class="img2" src="images/M3.jpeg" alt="BMW M3">
            <img class="img2" src="images/M4.jpg" alt="BMW M4">
            <img class="img2" src="images/M5.jpg" alt="BMW M5">
            <img class="img2" src="images/M8.jpg" alt="BMW M8">
        </div>

        <hr id="t">

        <h1 id="legend-title">LEGENDES</h1>

        <div id="showroom">
            <div class="car">
                <img src="images/M3CSL.jpeg" alt="BMW M3 CSL">
                <div class="description">
                    <h2>BMW M3 CSL</h2>
                    <p>La BMW M3 CSL est une version allégée et plus puissante de la M3 E46, produite en édition limitée
                        en
                        2003. Elle est équipée d'un moteur 3.2L 6-cylindre en ligne développant 360 ch.</p>
                    <button onclick="toggleSound(this, 'sounds/M3CSL.mp3')">Écouter le son</button>
                </div>
            </div>

            <div class="car">
                <img src="images/M4GT3.jpg" alt="BMW M4 GT3">
                <div class="description">
                    <h2>BMW M4 GT3</h2>
                    <p>La BMW M4 GT3 est une voiture de course basée sur la M4 G82, conçue pour les compétitions GT3.
                        Elle
                        est propulsée par un moteur 3.0L 6-cylindre en ligne turbo développant plus de 500 ch.</p>
                    <button onclick="toggleSound(this, 'sounds/M4GT3.mp3')">Écouter le son</button>
                </div>
            </div>

            <div class="car">
                <img src="images/M3GTR.jpg" alt="BMW M3 GTR">
                <div class="description">
                    <h2>BMW M3 GTR</h2>
                    <p>La BMW M3 GTR est une version de course de la M3 E46, produite en 2001 pour les compétitions
                        américaines. Elle est équipée d'un moteur V8 4.0L développant 493 ch.</p>
                    <button onclick="toggleSound(this, 'sounds/M3GTR.mp3')">Écouter le son</button>
                </div>
            </div>

            <div class="car">
                <img src="images/M1.jpg" alt="BMW M1">
                <div class="description">
                    <h2>BMW M1</h2>
                    <p>La BMW M1 est une voiture de sport produite entre 1978 et 1981. Elle est équipée d'un moteur 3.5L
                        6-cylindre en ligne développant 277 ch. C'est la première voiture développée par BMW Motorsport.
                    </p>
                    <button onclick="toggleSound(this, 'sounds/M1.mp3')">Écouter le son</button>
                </div>
            </div>
        </div>

    </main>

    <?php
    require('footer.php');
    ?>
    <script src="js/script.js"></script>
</body>

</html>