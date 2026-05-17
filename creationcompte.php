
<?php

$connexion = new mysqli("localhost", "root", "", "vite_gourmand");

if ($connexion->connect_error) {
    die("Erreur de connexion");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $adresse = $_POST["adresse"];
    $password = $_POST["password"];

    // vérifier si email existe déjà
    $check = $connexion->query("SELECT * FROM users WHERE email='$email'");

    if ($check->num_rows > 0) {
        echo "Email déjà utilisé";
    } else {

        $sql = "INSERT INTO users (nom, prenom, email, telephone, adresse, password)
        VALUES ('$nom', '$prenom', '$email', '$telephone', '$adresse', '$password')";

        if ($connexion->query($sql) === TRUE) {
            echo "Compte créé avec succès";
        } else {
            echo "Erreur";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<style>

  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    color: black;
    background-color: rgb(209, 255, 209);
      font-family: "Roboto", sans-serif;
}

header{
    background-color:forestgreen ;
    text-align: center;
    height: 150px;
    line-height: 2.4;
    
}

header h1{
    color: white;
}

form{
  width: 400px;
  margin: 20px auto;
  background-color: white;
  border-radius: 10px;
  padding: 10px;
  text-align: center;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
}
nav a{
     background-color: white;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 5px;
    display: inline-block;
    text-decoration: none;
    color: black;
    transition: 0.5s ease-in-out;
}
nav a:hover{
    transform: scale(1.2);
    background-color: rgb(40, 36, 36);
    color: white;
}
button{
    background-color: white;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 5px;
    display: inline-block;
    text-decoration: none;
    color: black;
    transition: 0.5s ease-in-out;
}
button:hover{
   transform: scale(1.2);
    background-color: rgb(40, 36, 36);
    color: white;
}
footer {
  background: forestgreen;
  color: white;
  text-align: center;
  padding: 10px;
  margin-top: 20px;
}
footer a{
        background-color: white;
    border-radius: 3px;
    padding: 5px;
    margin: 10px 5px;
    display: inline-block;
    text-decoration: none;
    color: black;
    transition: 0.5s ease-in-out;
     transition: 0.5s ease-in-out;
}
footer a:hover{
       transform: scale(1.2);
    background-color: rgb(40, 36, 36);
    color: white;
}
</style>

<body>
 <header>
  
    <h1>Créer un compte</h1>
      <nav>
    <a href="accueil.html">Accueil</a>
    <a href="Menu.html">Menus</a>
    <a href="connexion.html">Connexion</a>
     <a href="contact.html">Contact</a>
  </nav>
 </header>
<main>
<form method="POST">

        <input type="text" name="nom" placeholder="Nom" required>
        <br><br>

        <input type="text" name="prenom" placeholder="Prénom" required>
        <br><br>

        <input type="email" name="email" placeholder="Email" required>
        <br><br>

        <input type="text" name="telephone" placeholder="Téléphone" required>
        <br><br>

        <input type="text" name="adresse" placeholder="Adresse" required>
        <br><br>

        <input type="password" name="password" placeholder="Mot de passe" required>
        <br><br>

        <button type="submit">Créer compte</button>

    </form>


</main>
    

<footer>
 <p>Horaires : Lundi - Dimanche : 10h - 22h</p>
  <p>Contact : contact@vitegourmand.fr</p>
  <p>© 2026 Vite & Gourmand</p>
  <p>
    <a href="mentions.html">Mentions légales</a> | 
    <a href="cgv.html">Conditions générales de vente</a>
  </p>
</footer>


</body>

</html>