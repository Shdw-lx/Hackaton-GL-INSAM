<?php
    $conn =  mysqli_connect ("localhost","root", "", "participants_concours");

    $nom_equipe = $_REQUEST['teamName'];
    $paiement = $_REQUEST['paiement'];
    

    $sql = "INSERT INTO `equipe`(`Matricule`, `Nom_Equipe`, `Paiement`, `statut`) VALUES (null, '$nom__equipe','$paiement', null)";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Passons à l'enregistrement des membres !"
    } else {
        echo "Echec de l'insertion";
    };

?>