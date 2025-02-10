<header>
    <img id="bmw-logo" src="images/M.jpg" alt="Logo BMW M">
    <nav id="navh">
        <ul id="ulh">
            <?php
            $currentPage = basename($_SERVER['PHP_SELF']);
            ?>
            <li><a href="index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">Accueil</a></li>
            <li><a href="donnees.php" class="<?= $currentPage == 'donnees.php' ? 'active' : '' ?>">Données</a></li>
            <li><a href="galerie.php" class="<?= $currentPage == 'galerie.php' ? 'active' : '' ?>">Galerie</a></li>
            <li><a href="contact.php" class="<?= $currentPage == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
            <li><a href="partenaires.php"
                    class="<?= $currentPage == 'partenaires.php' ? 'active' : '' ?>">Partenaires</a></li>
        </ul>
    </nav>
</header>