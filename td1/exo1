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