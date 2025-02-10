<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau BMW Motorsport</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/dataTables.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

 

<div id="loading">
    <img src="images/BMWlogo.png" alt="BMW Logo" class="loading-logo">
</div>



    <?php require('header.php'); ?>

    <main>
        <h1>Tableau BMW Motorsport</h1>
        <div class="table-container">
            <table id="dataTable" class="display">
                <thead>
                    <tr>
                        <th>Modèle</th>
                        <th>Année</th>
                        <th>Moteur</th>
                        <th>Puissance</th>
                        <th>Couple</th>
                        <th>0-100 km/h (s)</th>
                        <th>Prix (€)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $json = file_get_contents('datas/csvjson.json');
                    $data = json_decode($json, true);
                    foreach ($data as $car) {
                        echo '<tr>';
                        echo '<td>' . $car['Modèle'] . '</td>';
                        echo '<td>' . $car['Année'] . '</td>';
                        echo '<td>' . $car['Moteur'] . '</td>';
                        echo '<td>' . $car['Puissance'] . '</td>';
                        echo '<td>' . $car['Couple'] . '</td>';
                        echo '<td>' . $car['0-100 km/h (s)'] . '</td>';
                        echo '<td>' . $car['Prix (€)'] . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTable').DataTable({
                    language: {
                        lengthMenu: "Afficher _MENU_ entrées",
                        zeroRecords: "Aucune donnée trouvée",
                        info: "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
                        infoEmpty: "Affichage de 0 à 0 sur 0 entrées",
                        infoFiltered: "(filtré à partir de _MAX_ entrées totales)",
                        search: "Rechercher :",
                        paginate: {
                            first: "Premier",
                            last: "Dernier",
                            next: "Suivant",
                            previous: "Précédent"
                        }
                    },
                });
            });
        </script>
    </main>

    <?php require('footer.php'); ?>
    
<script src="js/script.js"></script>
</body>

</html>