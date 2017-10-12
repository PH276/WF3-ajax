<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax formulaire insert</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" id="personne" name="personne" placeholder="Prénom à insérer">
        <input type="checkbox" id="sexe" name="sexe" ><span id="sp_sexe"></span>
        <input type="submit" id="submit" name="" value="ok">
    </form>

    <div id="resultat"></div>

    <script type="text/javascript" src="ajax_insert.js"></script>
</body>
</html>
