<?php
session_start();
$_SESSION['information2'] = '';

if (!empty($_FILES)) {

    $image_nom = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $image_taille = $_FILES['image']['size'];
    $image_temporaire = $_FILES['image']['tmp_name'];
    $image_error = $_FILES['image']['error'];

} else {
    echo '<p class="rouge">Vous devez sélectionner un fichier</p>';
}

$affichage_erreurs = '';
$erreurs = 0;

if ($image_error == 0) {
    if ($image_type != 'image/jpeg') {
        $affichage_erreurs .= '<p class="rouge">Le fichier n\'est pas au format jpeg ou extension invalide<br></p>';
        $erreurs++;
    }

    if (exif_imagetype($image_temporaire) != IMAGETYPE_JPEG) {
        $affichage_erreurs .= '<p class="rouge">Ce fichier n\'est pas une image jpeg<br></p>';
        $erreurs++;
    }
    if ($image_taille > 204800) { 
        $affichage_erreurs .= '<p class="rouge">L\'image est trop volumineuse (max 200 Ko).</p>';
        $erreurs++;
    }

} else {
    $affichage_erreurs = '<p class="rouge">"Impossible de télécharger le fichier, erreur de sélection<br><p>';
}

if ($erreurs != 0) {
    echo $affichage_erreurs;
} else {
    echo 'Fichier conforme<br>';
}

if ($erreurs == 0) {									
    $nbFichiers = -2;                         				
    $dossier = opendir("../images/galerie");
    while ($fichier = readdir($dossier)) {
        $nbFichiers++;
    }

    $image_num = $nbFichiers + 1;
    $image_nom = 'image' . $image_num . '.jpg';

    $destination = "../images/galerie/" . $image_nom;

    if (move_uploaded_file($image_temporaire, $destination)) {
        $erreurs = 0;
    } else {
        $affichage_erreurs = '<p class="rouge">Erreur de téléchargement<br></p>';
        $erreurs++;
    }
}

if ($erreurs != 0) {
    echo $affichage_erreurs;
} else {
    echo $affichage_erreurs = '<p class="vert">Téléchargement terminé avec succès<br></p>';
}

$_SESSION['information2'] = $affichage_erreurs;
header('location: ../galerie.php');

?>