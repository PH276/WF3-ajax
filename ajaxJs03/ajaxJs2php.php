<?php
require_once ('init.inc.php');
$tab = array();
$tab['montableau'] = '';
$tab['montableau'] .= '<table border=1>';
$tab['montableau'] .= '<tr>';

$resultat = $pdo->query("SELECT * FROM employes WHERE prenom='$_POST[personne]'");
$employe = $resultat -> fetch(PDO::FETCH_ASSOC);
for($i=0;$i < $resultat->columnCount();$i++){
    $colonne = $resultat->getColumnMeta($i);
    $tab['montableau'] .=  '<th>';
    $tab['montableau'] .=  $colonne['name'];
    $tab['montableau'] .= '</th>';
}

// echo '<pre>';
// print_r ($employe);
// echo '</pre>';

$tab['montableau'] .= '<tr>';

foreach($employe as $val){

    $tab['montableau'] .= '<td>';
    $tab['montableau'] .=  $val;
    $tab['montableau'] .= '</td>';
}

$tab['montableau'] .= '</tr>';
$tab['montableau'] .= '</table>';

echo json_encode($tab);

// echo $tab['montableau'];
