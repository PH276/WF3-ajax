<?php
require_once ('init.inc.php');

// réaliser une requete d'insert permettant d'insérer un prénom ds la BDD via le formulaire html
// $_POST['sexe'] = 1;
// $_POST['personne'] = "c2";
if ($_POST['sexe'] == 1) {
    $resultat = $pdo->exec("INSERT INTO employes (prenom, sexe) VALUES ('$_POST[personne]', 'm')");
}
else
{
    $resultat = $pdo->exec("INSERT INTO employes (prenom, sexe) VALUES ('$_POST[personne]', 'f')");
}
