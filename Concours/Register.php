<?php
    $conn =  mysqli_connect ("localhost","root", "", "participants_concours");

    $nom_equipe = $_REQUEST['nom_equipe'];
    $paiement = $_REQUEST['paiement'];
    

    $sql = INSERT INTO `equipe`(`Matricule`, `Nom_Equipe`, `Paiement`, `statut`) VALUES (null, $nom__equipe,$paiement, null);
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:Liste.php");
    } else {
        echo "Echec de l'insertion";
    };

?>