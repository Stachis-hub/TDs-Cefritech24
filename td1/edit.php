<?php
session_start();
require 'connexion.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Modifier un Etudiant</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Modifier 
                            <a href="index.php" class="btn btn-danger float-end">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">

                    <?php
                    if (isset($_GET['id'])) {
                        $student_id = mysqli_real_escape_string($con, $_GET['id']);
                        $query = "select * from student where id='$student_id' ";
                        $query_run = mysqli_query($con, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            $student = mysqli_fetch_array($query_run);
                            ?>
                            <form action="code.php" method="POST">
                        

                            <div class="mb-3">
                            <input type="hidden" name="id" value="<?=$student['id']; ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Nom</label>
                            <input type="text" name="name" value="<?=$student['name']; ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" value="<?=$student['Email']; ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Numéro de TéléPhone</label>
                            <input type="text" name="phone" value="<?=$student['phone']; ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Student Cours</label>
                            <input type="text" name="course" value="<?=$student['course']; ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Date de naissance</label>
                            <input type="date" name="birthdate" value="<?=$student['birthdate']; ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="edit_student" class="btn btn-primary">Enregistrer</button>
                        </div>

                    </form>
                    <?php
                        } else {
                            echo " <h4> Aucune donnée trouvée </h4> ";
                        }
                    }
                      ?>  
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>