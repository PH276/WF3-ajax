<?php
require_once ('init.inc.php');

// $pdo->exec("DELETE FROM employes WHERE prenom='toto'");
$pdo->exec("DELETE FROM employes WHERE prenom='$_POST[personne]'");
$resultat = $pdo->query('SELECT prenom FROM employes'); // crée un tableau indexé avec les noms des champs de la
$employes = $resultat->fetchAll(PDO::FETCH_ASSOC);
$contenu = array();
$contenu['form'] = '';
// echo '<pre>';
// print_r ($employe);
// echo '</pre>';

$contenu['form'] .= '<form action="#" method="post">';

$contenu['form'] .= '    <select id="personne" name="personne">';
foreach ($employes as $employe) {
    $contenu['form'] .= "            <option>$employe[prenom]</option>";
}
$contenu['form'] .= "    </select>";

$contenu['form'] .= '    <input type="submit" id="delete" value="delete">';

$contenu['form'] .= '</form>';

echo json_encode($contenu);
