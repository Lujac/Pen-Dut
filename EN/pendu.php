<?php 
include ("php/authorise.inc.php");
include ("php/connexion.inc.php");


?>

<?php 
if (!isset($_SESSION['MotATrouver'])) {
  
$Tableau = array();



$Mot =  $connexion->query("SELECT `Mot` FROM `mots` WHERE NomTheme = '$_SESSION[Theme]'");
foreach  ($Mot as $row) {
    $Tableau[] = strtoupper($row['Mot']);
  
}
$i = 1;
$min = 0;
$max = count($Tableau) - 1;
$ind = rand($min, $max);


$_SESSION['MotATrouver'] = $Tableau[$ind];

while ($i < strlen($Tableau[$ind])) {
       $i++;
}        

$_SESSION['MotAffiche'] = strtoupper(str_repeat("*", $i));

$_SESSION['NbEssai'] = 0;

$_SESSION['TempsDebut'] = time();


}

?>

<!doctype html>
<html lang="fr">
<head>
<link href="css/projet.css" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
  <title> Pendu </title>


</head>
<body>
<h1> Pen DUT </h1>

<div id = "Objectif">
<h3> Bonjour voici l'objectif du jeu ! </h3>

<p> Un mot a été choisi en rapport avec le thème : <?php echo $_SESSION['Theme']; ?> vous devez maintenant le deviner en donnant des lettres une à une au fur et à mesure attention vous avez un nombre d'essai limité !</p>
</div>
<div id ="jeu">
<?php
 $Find = str_split($_SESSION['MotATrouver']);
 $Print = str_split($_SESSION['MotAffiche']);
 $Activation = true;
 $Activation2 = false;
 $Activation3 = true;
 $Activation4 = true;
 $Activation5 = false;
 $good = 0;
 $y = 0;
 $dix = 10;

        if (isset($_POST['LettreEnvoie'])) { 
            $msg = NULL;
         
            if (empty($_POST['LettreNom'])) {
                $lettre =  NULL;
                $msg .= "<p>Vous avez oublié de saisir une lettre </p>";
                $Activation4 = false;
            } 
            else {
                $lettre = strtoupper($_POST['LettreNom']);
                $Activation4 = true;
                 
        }
            
            if ($Activation4 == true && !isset($_SESSION[$lettre])) {
                for ($case = 0; $case < count($Find); $case++) {
                    
                           if( $Find[$case] == $lettre) {

                                $Print[$case] = $lettre;
                                $_SESSION['MotAffiche'] = implode($Print);
                                $Activation2 = false;
                                $good = $good +1;
                                $_SESSION[$lettre] = $lettre;
                            }
                            
                               elseif($good == 0)  {
                                $Activation2 = true;
                                $_SESSION[$lettre] = $lettre;
                            }

                            
                        }  
                   
            
                
        }               
      elseif($lettre == NULL) {
      }
        else {
        echo "<font color='white'>Vous avez déja utiliser la lettre '$lettre'</font>";
        echo "<br/>";
      }
      
        if  ($Activation2 == true){
                $_SESSION['NbEssai'] = $_SESSION['NbEssai'] + 1;   
            
            }
            
        if ($_SESSION['MotAffiche'] == $_SESSION['MotATrouver']) {
          $_SESSION['TempsFin'] = time();
          header("Location:gagne.php"); 
          } 
        
        } 
        
        
          
        
       
        echo '<div id="essai">';
      echo "<br/>";
      echo  $_SESSION['MotAffiche'];  
echo "<br/>";
echo "Il vous reste ";

echo $dix - $_SESSION['NbEssai'];

echo " chances avant d être pendu";        
echo '</div>';
                            
                        
                    
          
     
        ?>
       <?php 
            if (isset($msg))
            echo "<font color='white'>$msg</font>";
        ?>
<?php

if ($_SESSION['NbEssai'] == 10) {
    echo "<br/>";
    echo "<font color='white'>Vous avez perdu le mot était '$_SESSION[MotATrouver]'</font>";
    $Activation = false;
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
    

    echo "<br/>";
    echo "<br/>";
    
    echo "<br/>";
    echo '<img src = "img/pendu.jfif" id ="imgperdu" />';
    echo '<form action="pendu.php" method="post" >';
    echo '<div>';
    echo '<input type="submit" name="rejouer" value="Rejouer" id= "rejouer" />';
    echo '</div>';
    echo '</form>';
   

    
    
    
  }


if( $Activation == true){
echo '<form action="pendu.php" method="post" id="Jeu">';
echo '<fieldset>';
echo '<legend> Choisissez une lettre : </legend>';
echo '<p> Lettre choisi :  ';
echo '<input type="text" name="LettreNom" size="3" maxlength="1" id="lettresaisi"';
echo '</p>';
echo '';
echo '<input type="submit" name="LettreEnvoie" value="Envoyer la lettre" id="LettreEnvoie" />';
echo '</fieldset>';
echo '</form>';



}


?>

</div>
</form>


<div id = "deco">

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
						<div>
							<input type="submit" name="themech" value="Changer de thème" id ="Theme"/>
						</div>
</form>
<br/>
<form action="php/logout.inc.php" method="post" >
					
							<input type="submit" name="logout" value="Déconnexion" id ="Deconnect"/>
						
</form>





</div id = "deco">	



<?php
 if (!empty($_POST)) {
  $msg2 = NULL;
  if (isset($_POST['themech'])) { 
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
      header("Location:theme.php");
      exit(); 
  } 
  else { 
      $msg2 .= "<p>Merci de recommencer votre identification.</p>";
  } 
}


     ?> 
</body>
</html>
