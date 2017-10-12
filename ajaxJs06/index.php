<?php require_once ('init.inc.php');
$resultat = $pdo->query("SELECT prenom FROM employes");
$employes = $resultat -> fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// var_dump ($employes);
// echo '</pre>';


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax 6</title>
</head>
<body>
    <div id="resultat"></div>

    <form action="#" method="post">
        <input type="text" id="personne" >

        <input type="submit" id="submit" value="ok">

    </form>

    <script src="ajax6.js"></script>
</body>
</html>
