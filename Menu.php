!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Menus</title>
  <link rel="stylesheet" href="style2.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<body>

<header>
  <h1>Vite & Gourmand</h1>

  <nav>
    <a href="accueil.php">Accueil</a>
    <a href="contact.php">Contact</a>
    <a href="login.php">Connexion</a>
  </nav>
</header>

<main>
<section class="menu">
  <h2>Menu Noël</h2>
  <img src="foie gras.webp">
  <img src="saumonfumé.webp">
  <img src="dinderotie.webp">
  <img src="gratindauphnois.webp">
  <img src="buchedenoel.webp">
  <img src="macarons.webp">
  <p><strong>Prix :</strong> 30€ / personne</p>
  <button>Commander</button>
  <button id="btn-noel">Voir détail Noël</button>
</section>

<section class="menu">
  <h2>Menu Pâques</h2>
  <img src="saladesprintanière.webp">
  <img src="veloutedelegumes.webp">
  <img src="agneauroti.webp">
  <img src="oeufdepâques.webp">
  <img src="tarteaufruits.webp">
  <p><strong>Prix :</strong> 25€ / personne</p>
  <button>Commander</button>
  <button id="btn-paques">Voir détail Pâques</button>
</section>

<section class="menu">
  <h2>Menu Classique</h2>
  <img src="soupemaison.webp">
  <img src="saladegastronomique.webp">
  <img src="pouletroti.webp">
  <img src="rizlegumes.webp">
  <img src="tartesaupommes.webp">
  <img src= "cremedessert.webp">
  <p><strong>Prix :</strong> 20€ / personne</p>
  <button>Commander</button>
  <button id="btn-classique">Voir détail Classique</button>

</section>
</main>

<div class="popup">

<section id="menu-noel">
  <img src="menunoel.webp" alt="menu noel">
<h2> Menu Noël</h2>

<p><strong>Entrées :</strong> Foie gras maison, saumon fumé aux agrumes</p>

        <p><strong>Plats :</strong> Dinde rôtie aux herbes, gratin dauphinois crémeux</p>

       <p><strong>Desserts :</strong> Bûche de Noël chocolat-noisette, macarons assortis</p>

    <p><strong>Prix :</strong> 30€ / personne (minimum 10 personnes)</p>

<p><strong>Conditions :</strong><br>
Commande 5 jours à l’avance minimum<br>
Livraison sur Bordeaux et alentours<br>
Produits à conserver au frais
</p>
<button id="retour-noel">Retour</button>
</section>


<section id="menu-paques">
  <img src="menupaques.webp" alt="menu paques">
<h2>Menu Pâques</h2>

  <p><strong>Entrées :</strong> Salade printanière, velouté de légumes</p>

      <p><strong>Plats :</strong> Agneau rôti aux herbes</p>

        <p><strong>Desserts :</strong> Œufs en chocolat, tarte aux fruits rouges</p>

  <p><strong>Prix :</strong> 25€ / personne (minimum 8 personnes)</p>

<p><strong>Conditions :</strong><br>
Commande 3 jours minimum à l’avance<br>
Livraison disponible sur Bordeaux<br>
Présence possible d’allergènes (gluten, lactose)
</p>
<button id="retour-paques">Retour</button>
</section>

<section id="menu-classique">
  <img src="menuclassique.webp" alt="menu Classique">
<h2>Menu Classique</h2>

<p><strong>Entrées :</strong> Soupe maison, salade composée</p>

<p><strong>Plats :</strong> Poulet rôti, riz et légumes</p>

<p><strong>Desserts :</strong> Tarte aux pommes, crème dessert</p>

<p><strong>Prix :</strong> 20€ / personne (minimum 5 personnes)</p>

<p><strong>Conditions :</strong><br>
Commande 48h à l’avance minimum<br>
Retrait sur place ou livraison possible<br>
Menu adaptable selon régime alimentaire
</p>
<button id="retour-classique">Retour</button>
</section>

</div>

<footer>
  <p>Horaires : Lundi - Dimanche : 10h - 22h</p>
  <p>Contact : contact@vitegourmand.fr</p>
  <p>© 2026 Vite & Gourmand</p>
  <p>
    <a href="mentions.php">Mentions légales</a> | 
    <a href="cgv.php">Conditions générales de vente</a>
  </p>
</footer>

<script>

let btnnoel = document.getElementById("btn-noel");
let btnpaques = document.getElementById("btn-paques");
let btnclassique = document.getElementById("btn-classique");

let popup = document.querySelector(".popup");

let menunoel = document.getElementById("menu-noel");
let menupaques = document.getElementById("menu-paques");
let menuclassique = document.getElementById("menu-classique");

let retournoel = document.getElementById("retour-noel");
let retourpaques = document.getElementById("retour-paques");
let retourclassique = document.getElementById("retour-classique");

btnnoel.addEventListener("click", function () {
  menunoel.style.display = "block";
  popup.style.display = "flex";
});

btnpaques.addEventListener("click", function () {
  menupaques.style.display = "block";
  popup.style.display = "flex";
});

btnclassique.addEventListener("click", function () {
  menuclassique.style.display = "block";
  popup.style.display = "flex";
});

// RETOUR
retournoel.addEventListener("click", function () {
  menunoel.style.display = "none";
  popup.style.display = "none";
});

retourpaques.addEventListener("click", function () {
  menupaques.style.display = "none";
  popup.style.display = "none";
});

retourclassique.addEventListener("click", function () {
  menuclassique.style.display = "none";
  popup.style.display = "none";
});
</script>

</body>
</html>