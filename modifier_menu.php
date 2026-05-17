
<?php
$connexion = new mysqli("localhost", "root", "", "vite_gourmand");

$id = $_GET["id"];

// 1. récupérer le menu actuel
$resultat = $connexion->query("SELECT * FROM menus WHERE id=$id");
$menu = $resultat->fetch_assoc();

// 2. si on clique sur modifier
if(isset($_POST["modifier"])) {

    $titre = $_POST["titre"];
    $description = $_POST["description"];
    $prix = $_POST["prix"];
    $personnes = $_POST["personnes"];
    $theme = $_POST["theme"];
    $regime = $_POST["regime"];

    $connexion->query("
        UPDATE menus SET 
        titre='$titre',
        description='$description',
        prix='$prix',
        personnes_min='$personnes',
        theme='$theme',
        regime='$regime'
        WHERE id=$id
    ");

    echo "Menu modifié ✔";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier menu</title>

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
header{
    background-color: rgb(0, 117, 128);
    padding: 20px;
    text-align: center;
    color: white;
}

nav a{
    background-color: white;
    color: black;
    text-decoration: none;
    padding: 10px;
    margin: 5px;
    border-radius: 5px;
    display: inline-block;
    transition: 0.3s;
}

nav a:hover{
    background-color: black;
    color: white;
}


.container{
    width: 400px;
    margin: 50px auto;
    background-color: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}


h1{
    text-align: center;
    margin-bottom: 20px;
}


input{
    width: 300px;
    margin: 0 auto;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid gray;
}

button{
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: rgb(0, 117, 128);
    color: white;
    cursor: pointer;
    transition: 0.3s;
}

button:hover{
    background-color: black;
}


.supprimer{
    background-color: crimson;
}

.supprimer:hover{
    background-color: darkred;
}

.message{
    text-align: center;
    margin-top: 20px;
    font-weight: bold;
}


footer{
    background-color: rgb(0, 117, 128);
    color: white;
    text-align: center;
    padding: 15px;
    margin-top: 50px;
}
    </style>
</head>

<body>

<h1>Modifier le menu</h1>

<form method="POST">

<input name="titre" value="<?= $menu["titre"] ?>">
<input name="description" value="<?= $menu["description"] ?>">
<input name="prix" value="<?= $menu["prix"] ?>">
<input name="personnes" value="<?= $menu["personnes_min"] ?>">
<input name="theme" value="<?= $menu["theme"] ?>">
<input name="regime" value="<?= $menu["regime"] ?>"> 

<button name="modifier">Modifier</button>

</form>

</body>
</html>