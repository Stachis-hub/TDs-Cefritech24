<?php
session_start();
require 'connexion.php';
?>

<! doctype html>
<html lang ='fr'>
    <head>
        <!--- ajouter les metadata -->

        <meta name = "viewport" content="width=device-width, initial-scale=1" rel = "stylesheet">
        <!--  Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>
            Gestion des étudiants
        </title>

    </head>

    <body>
        <div class="container mt-4">
            <div class ="row">
                <div class="col-md-12">
                    <div class ="card">
                    <div class="card-header">
                        <h4>
                            Liste des étudiants
                            <a href="create.php" class ="btn btn-primary float=end">Nouveau Etudiant</a>
                        </h4>
                    </div>
                    <div class="card=body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom de l'Etudiant</th>
                                    <th>Email</th>
                                    <th>Numéro de Téléphone</th>
                                    <th>Cours</th>
                                    <th>Date de Naissance</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$query = "Select * from students";
$query_run = mysqli_query($con, $query);

if (mysqli_num_rows($query_run) > 0) {
    foreach ($query_run as $student) {
        ?>
                                        <tr>
                                        <td> <?= $student['id'];?> </td>
                                        <td> <?= $student['name'];?> </td>
                                        <td> <?= $student['email'];?> </td>
                                        <td> <?= $student['phone'];?> </td>
                                        <td> <?= $student['course'];?> </td>
                                        <td> <?=
                                         $student['birthDate'];?> </td>
                                        <td>
                                            <a href=""> Voir</a>
                                            <a href=""> Editer</a>
                                            <a href=""> Supprimer</a>
                                        </td>
                                        </tr>
                                        <?php
}
} else {
    echo " <h5> Aucun Etudiant, la liste s'affichera ici une fois des étudiants ajoutés </h5> ";
}
?>

                            </tbody>

                        </table>

                    </div>

                    </div>

                </div>

            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>