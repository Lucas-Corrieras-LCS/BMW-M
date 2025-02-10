<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Galerie</title>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
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
        <form action="traitements/upload_image.php" method="post" enctype="multipart/form-data">
            <label for="image">Choisir un fichier</label>
            <input type="file" name="image" id="image">
            <input type="submit" value="Télécharger">
            <?php
            if (isset($_SESSION['information2'])) {
                echo $_SESSION['information2'] . "\n";
                session_unset();
            }
            ?>
        </form>
        <section class="galerie">
            <a href="M5E28.php">
                <img class="car5" src="images/galerie/bmw-m5-e28.jpg" alt="BMW M5">
            </a>
            <a href="M3E30.php">
                <img class="car5" src="images/galerie/BMW-M3-Sport-Evolution.jpeg" alt="BMW M3">
            </a>
            <a href="M5E34.php">
                <img class="car5" src="images/galerie/bmw-m5-e34-motor-v12.jpeg" alt="BMW M5">
            </a>
            <a href="M3E36.php">
                <img class="car6" src="images/galerie/M3-e36.avif" alt="BMW M3">
            </a>
            <a href="M5E39.php">
                <img class="car6" src="images/galerie/M5-e39.jpeg" alt="BMW M5">
            </a>
            <a href="M3E46.php">
                <img class="car5" src="images/galerie/bmw-e46-m3-.jpeg" alt="BMW M3">
            </a>
            <a href="M5E60.php">
                <img class="car5" src="images/galerie/M5-E60.jpeg" alt="BMW M5">
            </a>
            <a href="M3E92.php">
                <img class="car5" src="images/galerie/M3-E92.jpg" alt="BMW M3">
            </a>
            <a href="M4F82.php">
                <img class="car6" src="images/galerie/M4-F82.jpeg" alt="BMW M4">
            </a>
            <a href="M5F90.php">
                <img class="car6" src="images/galerie/bmw-m5-f90.avif" alt="BMW M5">
            </a>
        </section>

        <hr class="t">

        <section class="galerie">
            <a href="M1000RR.php">
                <img class="car6" src="images/galerie/M1000RR.jpeg" alt="BMW M1000RR">
            </a>
            <a href="M1000RR.php">
                <img class="car6" src="images/galerie/S1000RR.jpg" alt="BMW M1000RR">
            </a>
        </section>

        <hr class="t">

        <section class="galerie">
            <?php
            $dir = "images/galerie/";

            if (is_dir($dir)) {
                $fichiers = array_diff(scandir($dir), array('.', '..')); 
            
                $image_count = 0; 
            
                foreach ($fichiers as $fichier) {
                    if (preg_match('/^image\d+\.jpg$/', $fichier) && @exif_imagetype($dir . $fichier) == IMAGETYPE_JPEG) {
                        echo '<img class="car6" src="' . $dir . $fichier . '" alt="Image de la galerie">';
                        $image_count++;
                    }
                }

                if ($image_count == 0) {
                    echo "<p class='rouge'>Aucune image disponible.</p>";
                }
            }
            ?>
        </section>
    </main>

    <?php
    require('footer.php');
    ?>
    <script src="js/script.js"></script>
</body>

</html>