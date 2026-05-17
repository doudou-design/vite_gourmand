<?php

$connexion = new mysqli("localhost", "root", "", "vite_gourmand");

$id = $_GET["id"];

$resultat = $connexion->query("SELECT * FROM menus WHERE id = $id");

$menu = $resultat->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
 <title>Détails</title>
 <style>
 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Roboto", sans-serif;
}

body{
    background-color: rgb(207, 224, 207);
    color: black;
}

/* HEADER */
header{
    background-color: rgb(0, 117, 128);
    text-align: center;
    padding: 20px;
    color: white;
}

main{
    background-color: white;
    width: 400px;
    margin: 20px auto;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);

}
main p{
      line-height: 1.9;
}

/* TITRE */
h1, h2{
    text-align: center;
    margin: 20px 0;
}

/* FORMULAIRE (ajouter_menu) */
form{
    width: 350px;
    margin: 30px auto;
    padding: 20px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    display: flex;
    flex-direction: column;
    gap: 10px;
}

a{
    padding: 10px;
    background-color: rgb(0, 117, 128);
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration:none;
}

a:hover{
    background-color: black;
}
footer {
  background: rgb(0, 117, 128);
  color: white;
  text-align: center;
  padding: 10px;
  margin-top: 20px;
}
 </style>
    <title>Details</title>
</head>
<body>
    <header><h1><?= $menu["titre"] ?></h1></header>
<main>
<p><?= $menu["description"] ?></p>

<p>Prix : <?= $menu["prix"] ?> €</p>

<p>Personnes minimum : <?= $menu["personnes_min"] ?></p>

<p>Thème : <?= $menu["theme"] ?></p>

<p>Régime : <?= $menu["regime"] ?></p> <br>

<a href="menu.php">Retour</a>

</main>

<footer>

  <p>Horaires : Lundi - Dimanche : 10h - 22h</p>
  <p>Contact : contact@vitegourmand.fr</p>
  <p>© 2026 Vite & Gourmand</p>

</footer>
</body>
</html>

