<?php
   session_start();
   require'connexion.php';
?>
   <!doctype html>
<html lang="fr">
    <head>
         <meta name="viewport" content="width=device-width, initial-scale=1" rel="stylesheet">
         <link href="css/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
         <title> Gestion des étudiants </title>
    </head>

    <body>
        <div class="container mt-4">
        <?php  ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                                liste des étudiants
                                <a href="create.php" class="btn btn-primary"> Nouvel Etudiant</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom de l'étudiant</th>
                                        <th>Email</th>
                                        <th>Numéro de tel</th>
                                        <th>Cours</th>
                                        <th>Date de naissance</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $query = "select* from student"; //ici on recherche les etudiant dans la table
                                    $query_run = mysqli_query($con, $query);
                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach($query_run as $student){ //ici on récupère ce qui est dans chaque étudiants et on l'affiche
                                            ?>
                                            <tr>
                                            <td> <?= $student['id']; ?> </td>
                                            <td> <?= $student['name']; ?> </td>
                                            <td> <?= $student['Email']; ?> </td>
                                            <td> <?= $student['phone']; ?> </td>
                                            <td> <?= $student['course']; ?> </td>
                                            <td> <?= $student['birthdate']; ?> </td>
                                            <td>
                                                <a href=""> voir </a>
                                                <a href=""> éditer </a>
                                                <a href=""> supprimer </a>
                                                <form action = "code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_student" value="<?= $student['id']; ?>" class="btn btn-danger btn-sm">
                                                        Supprimer
                                                    </button>
                                                </form>
                                            </td>
                                            </tr>
                                            <?php 
                                        }
                                    }else{
                                        echo "<h5> Aucun étudiant, la liste s'affichera une fois un étudiant ajouté";
                                    }
                                            
                                        
                                    ?>
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script src="css/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    </body>
</html>


