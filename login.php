<?php

$connexion = new mysqli("localhost", "root", "", "vite_gourmand");

if ($connexion->connect_error) {
    die("Erreur connexion");
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $connexion->query($sql);

    if ($result->num_rows > 0) {
        $message = "Connexion réussie 👍";
    } else {
        $message = "Email ou mot de passe incorrect";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>

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
    height: 100px;
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
<header><h1>Connexion</h1></header>
<main>
    <form method="POST">

    <input type="email" name="email" placeholder="Email" required>
    <br><br>

    <input type="password" name="password" placeholder="Mot de passe" required>
    <br><br>

    <button type="submit">Se connecter</button>

</form> 
</main>


<p><?php echo $message; ?></p>


<footer>
    <p>Horaires : Lundi - Dimanche : 10h - 22h</p>
  <p>Contact : contact@vitegourmand.fr</p>
  <p>© 2026 Vite & Gourmand</p>
  <p>
    <a href="mentions.php">Mentions légales</a> 
    <a href="cgv.php">Conditions générales de vente</a>
  </p>
</footer>
</body>
</html>