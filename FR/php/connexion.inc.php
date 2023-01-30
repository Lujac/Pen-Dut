

<?php
include_once("bd.inc.php"); 

try {
    $connexion = new PDO('mysql:host='.HOTE.';dbname='.BD, USER, MDP);
    } catch (Exception $e) {
    echo 'Une erreur est survenue';
    die();
}
?>
