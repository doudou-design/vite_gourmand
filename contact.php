<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Contact</title>
  <link rel="stylesheet" href="style3.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<body>

<header>
  <h1>Vite & Gourmand</h1>

  <nav>
    <a href="accueil.php">Accueil</a>
    <a href="Menu.php">Menus</a>
    <a href="login.php">Connexion</a>
  </nav>
</header>

<main>

  <section class="menu">
    <h2>Contactez-nous</h2>

    <form action="#" method="post">

  <label for="nom">Nom :</label><br>
  <input type="text" id="nom" name="nom"><br><br>

  <label for="email">Email :</label><br>
  <input type="email" id="email" name="email"><br><br>

  <label for="message">Message :</label><br>
  <textarea id="message" name="message"></textarea><br><br>

  <button type="submit">Envoyer</button>

</form>

  </section>

</main>

<footer>
  <p>Horaires : Lundi - Dimanche : 10h - 22h</p>
  <p>Contact : contact@vitegourmand.fr</p>
  <p>© 2026 Vite & Gourmand</p>
  <p>
    <a href="mentions.php">Mentions légales</a> | 
    <a href="cgv.php">Conditions générales de vente</a>
  </p>
</footer>

</body>
</html>