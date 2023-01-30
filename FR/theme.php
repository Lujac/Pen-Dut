<?php 

include ("php/authorise.inc.php");
include ("php/connexion.inc.php");

?>
<html>
    <head>
        <meta charset="utf-8">
        <title> Pendu</title>
        <link rel="stylesheet" href="css/projet.css">

    </head>
    <body>
<div id ="Info">        
<?php 

$data = $connexion->query("SELECT * FROM theme")->fetchAll(); 
// Je n'arrivais pas avec --> prepare, j'ai donc utilisé query tout au long du tp même si ce n'est pas trés sécurisée.
foreach ($data as $row) {
    echo $row['NomTheme']."<br />\n";
    echo $row['Descri']."<br />\n";
    echo "<br/>";
}

?>

</div>
         <?php
    
    if (!empty($_POST)) {
        $msg = NULL;
        if (isset($_POST['bouton'])) { 
            session_start();
            $_SESSION['Theme'] = $_POST['bouton'];
            header("Location:pendu.php");
            exit(); 
        } 
        else { 
            $msg .= "<p>Merci de recommencer votre identification.</p>";
        } 
     }
    
    ?>
                <br/>
                <br/>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="formulaire2" >
            <fieldset>
                <legend> Veuillez choisir un thème : </legend>
                
                    <input type="submit" name="bouton" value="Promotion MMI"/>
                    <input type="submit" name="bouton" value="Animaux"/>
                    <input type="submit" name="bouton" value="Anime"/>
                
            </fieldset>
        </form>


        
       


</body>
</html>
