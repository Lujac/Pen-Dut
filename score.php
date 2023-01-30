<?php 
include ("php/connexion.inc.php");

?>
<!doctype html>
<html lang="fr">
<head>
<link href="css/projet.css" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
  <title>Pendu </title>
  

</head>
<body>

<h1> Meilleurs Scores </h1>
<div id="bdd">
<?php 

$Score = $connexion->query("SELECT * FROM score order by ScoreTotal desc limit 5")->fetchAll(); 

foreach ($Score as $row) {
    echo "<h3>";
    echo $row['ScoreTotal']."<br />\n";
    echo "</h3>";
    echo "<h3> par </h3>";
    echo "<h3>";
    echo $row['NomJoueur'];
    echo "</h3>";
    echo "<br/>";
}

?>

</div>

<footer> 
</body>
</html>