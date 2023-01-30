<?php
        // Lancement de la session
        session_start();
        // On regarde si la session est valide
        if (!isset($_SESSION['Joueur'])) {
        header("Location:index.php");
        exit();
        }
?>
