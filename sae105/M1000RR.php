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
            <img class="carx" src="images/galerie/M1000RR.jpeg" alt="BMW M1000RR">
        </div>
        <p class="M1000RR">La BMW M 1000 RR, souvent appelée M RR, est la première moto à porter le prestigieux badge “M”
            de BMW, symbole de haute performance et d’excellence. Conçue pour allier des performances extrêmes en
            compétition et une homologation pour la route, elle incarne le summum de la technologie et du savoir-faire
            de BMW Motorrad.</p>

        <p class="M1000RR">Le moteur de la M 1000 RR est un quatre cylindres en ligne de 999 cm³, dérivé de celui de la S
            1000 RR, mais optimisé avec des composants haut de gamme comme des bielles en titane et des pistons allégés.
            Il développe une puissance maximale de 212 chevaux à 14 500 tr/min et un couple de 113 Nm à 11 000 tr/min,
            avec un régime maximal impressionnant de 15 100 tr/min.

            Pour maximiser les performances, BMW a intégré la technologie ShiftCam, permettant une distribution variable
            des soupapes afin d’optimiser à la fois la puissance à haut régime et le couple à bas régime.</p>

        <p class="M1000RR">La M 1000 RR est dotée de winglets en fibre de carbone, conçus pour améliorer l’appui
            aérodynamique. À haute vitesse, ces ailettes augmentent la stabilité en limitant la levée de la roue avant,
            ce qui permet d’exploiter toute la puissance en ligne droite et dans les virages.

            Le cadre en aluminium léger “Flex Frame” offre une rigidité et une précision exceptionnelles. La suspension
            est réglable avec une fourche inversée à l’avant et un amortisseur arrière centralisé, permettant des
            ajustements pour la route ou la piste.</p>

        <button class="son" onclick="toggleSound(this,'sounds/M1000RR.mp3')">Écouter le son</button>
    </main>

    <?php
    require('footer.php');
    ?>
    
<script src="js/script.js"></script>
</body>

</html>