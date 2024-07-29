<?php
   session_start();
   require'connexion.php';

if (isset($_POST['save_student'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
    $birthdate = mysqli_real_escape_string($con, $_POST['birthdate']);

    $query = "Insert into student(id,name, email,phone,course,birthdate) values ('$name', '$email', '$phone', '$course', '$birthdate')";
    $query = "Insert into student(name, email,phone,course,birthdate) values ('$name', '$email', '$phone', '$course', '$birthdate')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {

    }
}


if (isset($_POST['delete_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "Delete from student where id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message']= "Suppression effectuée";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message']= "Echec de Suppression";
        header("Location: index.php");
    }

}