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
        <h1>Partenaires</h1>
        <section id="partenaires">
            <div class="partenaire">
                <div class="carte">
                    <div class="face front">
                        <img src="images/chhour.jpg" alt="Mathis Chhour">
                        <div class="description">
                            <h2>Mathis Chhour</h2>
                        </div>
                    </div>
                    <div class="face back">
                        <h2>Hamza</h2>
                        <a href="http://mmi24b09.sae105.ovh/index.php" target="_blank">
                            <img src="images/chhousite.jpg" alt="Photo du site sur Hamza">
                        </a>
                        <p class="description_back">Ce site met en lumière Hamza, son univers musical et son influence
                            unique sur la scène rap</p>
                    </div>
                </div>
            </div>

            <div class="partenaire">
                <div class="carte">
                    <div class="face front">
                        <img src="images/lcsphoto.jpg" alt="Lucas Corrieras">
                        <div class="description">
                            <h2>Lucas Corrieras</h2>
                        </div>
                    </div>
                    <div class="face back">
                        <h2>BMW Motorsport</h2>
                        <a class="liensite" href="http://mmi24b11.sae105.ovh/index.php" target="_blank">
                            <img src="images/lcssite.jpg" alt="photo du site sur BMW M">
                        </a>
                        <p class="description_back">Ce site BMW Motorsport célèbre la passion, la performance et
                            l’ingénierie de
                            la marque BMW M</p>
                    </div>
                </div>
            </div>

            <div class="partenaire">
                <div class="carte">
                    <div class="face front">
                        <img src="images/marwan.jpg" alt="Marwan Bouchebbat">
                        <div class="description">
                            <h2>Marwan Bouchebbat</h2>
                        </div>
                    </div>
                    <div class="face back">
                        <h2>Muhammad Ali</h2>
                        <a class="liensite" href="http://mmi24a12.sae105.ovh/index.php" target="_blank">
                            <img src="images/marsite.jpg" alt="Photo du site Muhammad ali">
                        </a>
                        <p class="description_back">Ce site explore l’héritage de Muhammad Ali, son impact sur la boxe
                            et sa légende intemporelle</p>
                    </div>
                </div>
            </div>

            <div class="partenaire">
                <div class="carte">
                    <div class="face front">
                        <img src="images/Brundidi.jpg" alt="Brandon Vo">
                        <div class="description">
                            <h2>Brandon Vo</h2>
                        </div>
                    </div>
                    <div class="face back">
                        <h2>The Weeknd</h2>
                        <a class="liensite" href="http://mmi24a15.sae105.ovh/index.php" target="_blank">
                            <img src="images/brandonsite.jpg" alt="Photo du site The Wenknd">
                        </a>
                        <p class="description_back">Ce site dévoile l’univers de The Weeknd, sa musique unique et son
                            influence dominante dans l’industrie musicale</p>
                    </div>
                </div>
            </div>
        </section>

        <button class="Documents-btn" id="openModal">
            <span class="folderContainer">
                <svg class="fileBack" width="146" height="113" viewBox="0 0 146 113" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0 4C0 1.79086 1.79086 0 4 0H50.3802C51.8285 0 53.2056 0.627965 54.1553 1.72142L64.3303 13.4371C65.2799 14.5306 66.657 15.1585 68.1053 15.1585H141.509C143.718 15.1585 145.509 16.9494 145.509 19.1585V109C145.509 111.209 143.718 113 141.509 113H3.99999C1.79085 113 0 111.209 0 109V4Z"
                        fill="url(#paint0_linear_117_4)"></path>
                    <defs>
                        <linearGradient id="paint0_linear_117_4" x1="0" y1="0" x2="72.93" y2="95.4804"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#8F88C2"></stop>
                            <stop offset="1" stop-color="#5C52A2"></stop>
                        </linearGradient>
                    </defs>
                </svg>
                <svg class="filePage" width="88" height="99" viewBox="0 0 88 99" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="88" height="99" fill="url(#paint0_linear_117_6)"></rect>
                    <defs>
                        <linearGradient id="paint0_linear_117_6" x1="0" y1="0" x2="81" y2="160.5"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="white"></stop>
                            <stop offset="1" stop-color="#686868"></stop>
                        </linearGradient>
                    </defs>
                </svg>

                <svg class="fileFront" width="160" height="79" viewBox="0 0 160 79" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.29306 12.2478C0.133905 9.38186 2.41499 6.97059 5.28537 6.97059H30.419H58.1902C59.5751 6.97059 60.9288 6.55982 62.0802 5.79025L68.977 1.18034C70.1283 0.410771 71.482 0 72.8669 0H77H155.462C157.87 0 159.733 2.1129 159.43 4.50232L150.443 75.5023C150.19 77.5013 148.489 79 146.474 79H7.78403C5.66106 79 3.9079 77.3415 3.79019 75.2218L0.29306 12.2478Z"
                        fill="url(#paint0_linear_117_5)"></path>
                    <defs>
                        <linearGradient id="paint0_linear_117_5" x1="38.7619" y1="8.71323" x2="66.9106" y2="82.8317"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#C3BBFF"></stop>
                            <stop offset="1" stop-color="#51469A"></stop>
                        </linearGradient>
                    </defs>
                </svg>
            </span>
            <p class="text">Documents</p>
        </button>

        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Documents PDF</h2>
                <p>Choisissez un document à télécharger :</p>
                <div class="modal-buttons">
                    <div class="download">
                        <div class="download-wrapper">
                            <a href="pdf/WS106-plandeprojet-CHHOUR_MATHIS-BOUCHEBBAT_MARWAN-VO_BRANDON-CORRIERAS_LUCAS.pdf"
                                download class="download-link">
                                <div class="download-text">Plan de Projet</div>
                                <span class="download-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em"
                                        height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"
                                            d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="download">
                        <div class="download-wrapper">
                            <a href="pdf/WS106-diagrammes-CHHOUR_MATHIS-BOUCHEBBAT_MARWAN-VO_BRANDON-CORRIERAS_LUCAS.pdf"
                                download class="download-link">
                                <div class="download-text">Diagrammes</div>
                                <span class="download-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em"
                                        height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"
                                            d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="download">
                        <div class="download-wrapper">
                            <a href="pdf/WS106-chartedeprojet-CHHOUR_MATHIS BOUCHEBBAT_MARWAN-VO_BRANDON-CORRIERAS_LUCAS-1.pdf"
                                download class="download-link">
                                <div class="download-text">Charte de Projet</div>
                                <span class="download-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em"
                                        height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"
                                            d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
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