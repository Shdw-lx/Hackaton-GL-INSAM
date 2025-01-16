<?php
$conn = mysqli_connect("localhost", "root", "", "participants_concours");

$sqlTeams = "SELECT `Matricule`, `Nom_Equipe`, `Paiement`, `statut` FROM `equipe`";
$resultTeams = mysqli_query($conn, $sqlTeams);

$teamId = isset($_GET['team_id']) ? intval($_GET['team_id']) : null;
$members = [];
if ($teamId) {
    $sqlMembers = "SELECT `Nom`, `Prénom`, `Matricule_Equipe` FROM `membre_equipe` WHERE team_id = $teamId";
    $resultMembers = mysqli_query($conn, $sqlMembers);
    $members = mysqli_fetch_all($resultMembers, MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Liste.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Cyberpunk';
            src: url('https://your-cyberpunk-font-link.woff')format('woff');
        }
    </style>
    <title>Liste des Equipes en Compétition</title>
</head>
<body>
    <div class="container">
        <center><h1>Equipe en Lice</h1></center>

            <table>
                <thead>
                    <tr>
                        <th>Matricule</th>
                        <th>Nom de l'équipe</th>
                        <th>Montant Versé (XAF)</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultTeams as $team): ?>
                    <tr>
                        <td><?= $team['Matricule']?></td>
                        <td>
                            <a href="?team_id=<?=$team['Matricule'];?>">
                                <?=$team['Nom_Equipe'];?>
                            </a>
                        </td>
                        <td><?=$team['Paiement'];?></td>
                        <td><?=$team['Status'];?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>

            <?php if ($teamId && $members): ?>
                <h2>Membres de l'Equipe : <?= htmlspecialchars($teamId);?></h2>
                <ul>
                    <?php foreach ($members as $member):?>
                        <li><?=htmlspecialchars($member['Nom']);?></li>
                        <li><?=htmlspecialchars($member['Prénom']);?></li>
                    <?php endforeach;?>
                </ul>
            <?php elseif ($teamId): ?>
                <p>C'est la fameuse équipe fantôme !</p>
            <?php endif;?>
            <div class="signature">Made by 697</div>
    </div>
    <div class="table-background">
        <div class="circuit-lines"></div>
        <div class="circuit-dots"></div>
    </div>
</body>
</html>