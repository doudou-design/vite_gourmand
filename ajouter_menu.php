<?php
$connexion = new mysqli("localhost", "root", "", "vite_gourmand");

if(isset($_POST["ajouter"])) {

 $titre = $_POST["titre"];
$description = $_POST["description"];
  $prix = $_POST["prix"];
 $personnes = $_POST["personnes"];
$theme = $_POST["theme"];
$regime = $_POST["regime"];

 $connexion->query("INSERT INTO menus (titre, description, prix, personnes_min, theme, regime)
VALUES ('$titre', '$description', '$prix', '$personnes', '$theme', '$regime')");

echo "Menu ajouté !";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
</head>
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
    text-align: center;
    padding: 20px;
    color: white;
}

nav a{
    background-color: white;
    padding: 10px;
    margin: 5px;
    display: inline-block;
    text-decoration: none;
    color: black;
    border-radius: 5px;
    transition: 0.3s;
}

nav a:hover{
    background-color: black;
    color: white;
}


h1, h2{
    text-align: center;
    margin: 20px 0;
}


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

input, textarea{
    padding: 8px;
    border: 1px solid gray;
    border-radius: 5px;
}

button{
    padding: 10px;
    background-color: rgb(0, 117, 128);
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover{
    background-color: black;
}
a{
       padding: 10px;
    background-color: rgb(0, 95, 104);
    color: white;
    border: 0.3px solid black;
    border-radius: 5px;
    text-align:center;
    boder:none;
    text-decoration: none;
}

a:hover{
    background-color: black;s
}
.detail{
    width: 400px;
    margin: 30px auto;
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

.detail p{
    margin: 10px 0;
}
</style>
<body>
 <header><h1>Ajouter</h1></header>

    <form method="POST">

<input name="titre" placeholder="Titre"><br>
<input name="description" placeholder="Description"><br>
<input name="prix" placeholder="Prix"><br>
<input name="personnes" placeholder="Personnes min"><br>
<input name="theme" placeholder="Thème"><br>
<input name="regime" placeholder="Régime"><br>

<button name="ajouter">Ajouter</button>
<a href="Menu.php">Retour</a>

</form>
</body>
</html>