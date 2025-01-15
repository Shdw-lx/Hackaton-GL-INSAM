<?php
    $conn = mysqli_connect ("localhost", "root", "", "Concours");
    $nom = $_REQUEST['nom'];
    $prénom = $_REQUEST['prénom'];

    $sql = INSERT INTO `membre_equipe`(`Nom`, `Prénom`, `Matricule_Equipe`) VALUES ($nom, $prénom, null);

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header ("location:...");
    } else {
        echo "Echec de l'insertion !";
    };
?>