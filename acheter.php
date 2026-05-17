<?php
$id = $_GET['id'] ?? null;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Achat</title>
</head>
<body>

<h1>Commande confirmée 🍽️</h1>

<p>Vous avez choisi le menu ID : <?= $id ?></p>

<a href="Menu.php">Retour aux menus</a>

</body>
</html>