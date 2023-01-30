

<?php

session_start();

if (!isset($_SESSION['Joueur'])) { 
header("Location:index.php");
exit();
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <link href="../css/projet.css" rel="stylesheet" type="text/css">
        <title> Page de Deconnexion </title>
    </head>
    <body>
        <h1> Page de déconnexion </h1>
        <?php
        $_SESSION = array();
        session_destroy();
        ?>
        <div id ="Aurevoir">
        <p> Au revoir !!!! <br/>
            Vous êtes maintenant déconnecté du Pendu, appuyez sur le bouton ci-dessous pour vous reconnecter
        </p> 
</div>
        <form action="../index.php" method="post">
            <div >
                <input type="submit" name="deco" value="Reconnexion" id ="rejouer" />
            </div>
        </form>
    </body>
</html>
