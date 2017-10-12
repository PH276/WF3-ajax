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
    <title>Ajax 2</title>
</head>
<body>
    <div id="resultat">
        <form action="index.html" method="post">
            <select id="personne" name="personne">
                <?php foreach ($employes as $employe) : ?>
                    <option><?= $employe['prenom'] ?></option>
                <?php endforeach; ?>
            </select>

            <input type="reset" name="" id="delete" value="delete">

        </form>
    </div>
    <script src="ajax_delete.js"></script>
</body>
</html>
