<?php
    $conn = mysqli_connect ("localhost", "root", "", "participants_concours");
    $nom = $_REQUEST['Nom'];
    $prénom = $_REQUEST['Prénom'];

    $sql = "INSERT INTO `membre_equipe`(`Nom`, `Prénom`, `Matricule_Equipe`) VALUES ('$nom', '$prénom', null)";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header ("location:Liste.php");
    } else {
        echo "Echec de l'insertion !";
    };
?>