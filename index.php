<!doctype html>
<html lang="fr">
<head>
<link href="css/projet.css" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
  <title>Pendu </title>
  

</head>
<body>
<h1> Le Pen DUT </h1>

<h2> Par Kieran Mignon </h2>
<br/>
<div id ="Presentation">
        <h3>Connectez vous pour jouer </h3>
        <p> Nom d'utilisateur : Kieran </p>
        <p> Mot de passe : Cordelette </p>
</div>

<?php 

include ("php/mire.inc.php");


?>
<br/>
<br/>
<br/>
<form action="Score.php" method="post" id="Scorevoir">
            

            <input type="submit" name="submit" value="Voir les scores" id="Score"/>

    
</form>



    
</body>
</html>