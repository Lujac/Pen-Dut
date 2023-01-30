
<?php 
include ("php/authorise.inc.php");
include ("php/connexion.inc.php");
// J'ai créer la variable $_SESSION['TempsFin'] dans la page pendu.php lorsque l'utilisateur gagne, car en actualisant la page si je l'avais créer ici le score aurait changé
?>




<!doctype html>
<html lang="fr">
<head>
<link href="css/projet.css" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
  <title> Pendu </title>

  <body>
  <div id ="gagner">
  <?php
echo "<h1> Vous avez gagné !!!!! </h1>";
echo "Le mot que vous deviez trouver était ";
echo $_SESSION['MotATrouver'];
echo ". Vous aviez choisi le thème : ";
echo $_SESSION['Theme'];
echo ". Enfin votre nombre d'essai est de : ";
echo $_SESSION['NbEssai'];
echo "<br/>";
$Differencetemps = $_SESSION['TempsFin'] - $_SESSION['TempsDebut'];
$Score = (300 - $Differencetemps) * 10 - ($_SESSION['NbEssai'] * 30);
echo "<br/>";
?>
<h3> Votre score est de" <?php  echo $Score; ?> " Bien joué à vous ! </h3>
</div>



<?php 
         if (!empty($_POST)) {
          $msg2 = NULL;
          if (isset($_POST['Rejouer'])) { 
            unset($_SESSION['MotATrouver']);
            unset($_SESSION['MotAffiche']);
            unset($_SESSION['NbEssai']);
            unset($_SESSION['MotATrouver']);
            unset($_SESSION['MotAffiche']);
            unset($_SESSION['NbEssai']);
            unset ($_SESSION['A']);
            unset ($_SESSION['B']);
            unset ($_SESSION['C']);
            unset ($_SESSION['D']);
            unset ($_SESSION['E']);
            unset ($_SESSION['F']);
            unset ($_SESSION['G']);
            unset ($_SESSION['H']);
            unset ($_SESSION['I']);
            unset ($_SESSION['J']);
            unset ($_SESSION['K']);
            unset ($_SESSION['L']);
            unset ($_SESSION['M']);
            unset ($_SESSION['N']);
            unset ($_SESSION['O']);
            unset ($_SESSION['P']);
            unset ($_SESSION['Q']);
            unset ($_SESSION['R']);
            unset ($_SESSION['S']);
            unset ($_SESSION['T']);
            unset ($_SESSION['U']);
            unset ($_SESSION['V']);
            unset ($_SESSION['W']);
            unset ($_SESSION['X']);
            unset ($_SESSION['Y']);
            unset ($_SESSION['Z']);
            unset ($_SESSION['-']);
              header("Location:pendu.php");
              exit(); 
          } 
          else { 
              $msg2 .= "<p>Merci de recommencer </p>";
          } 
        }

?>

<div id ="bdd">
<?php 

if ($Score >= 1500) { //J'ai changé l'objectif à 1500 au lieu de 1000, car les mots sont un peu trop facile et donc il est simple d'avoir un score élevé 

  $bravo = $connexion->query("INSERT INTO `score` (`ScoreTotal`, `NomJoueur`) VALUES ('$Score', '$_SESSION[Joueur]');");
  echo "<br/>"; 
  echo " Votre score a été inséré dans notre base de données ";
}

?>
</div>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
<div>
<input type="submit" name="Rejouer" value="Rejouer" id = "rejouer"/>
</div>
</form>
</body>
</html>