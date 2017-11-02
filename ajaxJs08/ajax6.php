<?php
require_once ('init.inc.php');
$tab = array();
$tab['montableau'] = '';
$tab['montableau'] .= '<table border=1>';
$tab['montableau'] .= '<tr>';

if (isset($_POST['personne'])) {
    $pdo->exec("INSERT INTO employes (prenom, sexe) VALUES ('$_POST[personne]', 'm')");
}

$resultat = $pdo->query("SELECT * FROM employes");
$employe = $resultat -> fetchAll(PDO::FETCH_ASSOC);
for($i=0;$i < $resultat->columnCount();$i++){
    $colonne = $resultat->getColumnMeta($i);
    $tab['montableau'] .=  '<th>';
    $tab['montableau'] .=  $colonne['name'];
    $tab['montableau'] .= '</th>';
}

// echo '<pre>';
// print_r ($employe);
// echo '</pre>';


foreach($employe as $val){
    $tab['montableau'] .= '<tr>';
    foreach($val as $val2){

        $tab['montableau'] .= '<td>';
        $tab['montableau'] .=  $val2;
        $tab['montableau'] .= '</td>';
    }
    $tab['montableau'] .= '</tr>';
}

$tab['montableau'] .= '</table>';

echo json_encode($tab);

// echo $tab['montableau'];
