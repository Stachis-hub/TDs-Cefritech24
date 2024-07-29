
<?php
session_start();
require 'connexion.php';


if (isset($_POST['save_student'])) {
    $id = mysqli_real_escape_string($con, $_POST['id']); 
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
    $birthdate = mysqli_real_escape_string($con, $_POST['birthdate']);

    $query = "Insert into student(id,name, email,phone,course,birthdate) values ('$id','$name', '$email', '$phone', '$course', '$birthdate')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        header("Location:  index.php");
        exit(0);
    } else {
        header("Location:  create.php");
        exit(0);
    }
}

?>