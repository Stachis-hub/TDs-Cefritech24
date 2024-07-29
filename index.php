<?php

    $prof = "JOUONANG Mesmin. O";
    $niveau = "Msc Computer Science";
    echo "Bienvenue au cours de PHP, enseigné par Monsieur ". $prof ." Grade: " . $niveau;

    /* Concevoir un formulaire d'enregistrment des notes, on récupère les notes 
    de chaque matière dans un champ, au clic du bouton "Donner la mention", 
    on écrira la mention de l'étudiant; Médiocre < 10 ; Passable =10; Bien =10" */
?>

<?php

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the values from the form
  $eng = $_POST['eng'];
  $fr = $_POST['fr'];

  $result = ($eng + $fr)/2;
  $mention;

  if ($result <10) {
    $mention = "Médiocre";
    } else {
        if ($result == 10) {
        $mention = "Passable";
    } else {
        $mention = "BIEN!!!";
    }
    
}
} ?>

<form action="index.php" method="post">
    <div>
        <label> English </label>
        <input type="text" name="eng">
    </div>
    <div>
        <label> French </label>
        <input type="text" name="fr">
    </div>
  
  <input type="submit" name="submit" value="Calculate">
</form>

<?php // If the form has been submitted, display the result
if (isset($result)) {
  echo "Result: $result";
  echo "<br />";
  echo "Mention: $mention";
}
?>
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
            <?php include('message.php'); ?>
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


