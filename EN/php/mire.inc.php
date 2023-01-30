
<html>

        <?php
        
        if (isset($_POST['submit'])) { 
          
            $msg = NULL;
         
            if (empty($_POST['nomuser'])) {
                $user = FALSE;
                $msg .= "<p>Vous avez oublié d'indiquer votre nom d'utilisateur.</p>";
            } 
            else {
                $user = $_POST['nomuser'];
            }
           
            if (empty($_POST['passwd'])) {
                $pswd = FALSE;
                $msg .= "<p>Vous avez oublié d'indiquer votre password.</p>";
            } 
            else {
                $pswd = $_POST['passwd'];
            }
            if ($user && $pswd) {
                if (($user == "Kieran") && ($pswd == "Cordelette")) {
                    session_start();
                    $_SESSION['Joueur'] = $user;
                    header("Location:theme.php");
                    exit();
                } 
                else {
                    $msg .= "<p>Le mot de login et/ou le mot de passe sont faux !!!!!</p>";
                }
            } 
            else {
                $msg .= "<p>Merci de recommencer votre identification.</p>";
            }
        }
        ?>
        <?php 
            if (isset($msg))
            echo "<font color='red'>$msg</font>";
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="formulaire">
            <fieldset>
                <legend> Veuillez renseigner le formulaire ci-après : </legend>
                <p> Utilisateur :
                <input type="text" name="nomuser" size="10" maxlength="20"
                    value="<?php if (isset($_POST['nomuser'])) echo $_POST['nomuser']; ?>" />
                </p>
                <p> Mot de passe :
                    <input type="password" name="passwd" size="20" maxlength="20" />
                </p>
                
                    <input type="submit" name="submit" value="Connexion" id = "Connect"/>
                
            </fieldset>
        </form>
    </body>
</html>