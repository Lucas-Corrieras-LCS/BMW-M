<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Contact</title>
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
        <h1>Contact</h1>
        <div>
            <form action="traitements/envoi_mail.php" method="post">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" required><br><br>

                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="subject">Préciser votre demande:</label><br>

                <div id="radio">
                    <div class="radio-group">
                        <label for="information">Information</label>
                        <input type="radio" id="information" name="subject" value="Information" required>
                    </div>

                    <div class="radio-group">
                        <label for="devis">Demande de devis</label>
                        <input type="radio" id="devis" name="subject" value="Demande de devis" required>
                    </div>

                    <div class="radio-group">
                        <label for="reclamation">Réclamation</label>
                        <input type="radio" id="reclamation" name="subject" value="Réclamation" required>
                    </div>
                </div>

                <label for="message">Message:</label>
                <textarea id="message" name="message"></textarea><br><br>

                <?php
                if (isset($_SESSION['information'])) {
                    echo $_SESSION['information'] . "\n";
                    session_unset();
                }
                ?>

                <input type="submit" value="Envoyer">
            </form>
        </div>
    </main>

    <?php
    require('footer.php');
    ?>
    <script src="js/script.js"></script>
</body>

</html>