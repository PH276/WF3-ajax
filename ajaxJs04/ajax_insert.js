document.addEventListener("DOMContentLoaded", function(event){
    document.getElementById("submit").addEventListener("click", function(event){
        event.preventDefault();
        ajax();
    });

    function ajax(){
        var r = new XMLHttpRequest();
        var p = document.getElementById("personne");
        var s = document.getElementById("sexe");

        var personne = p.value; // récupère la valeur du champ 'personne'
        var sexe = (s.checked)?'1':'0'; // récupère la valeur du champ 'personne'
        console.log(personne);

        // prépare les parametres à envoyer avec la requete POST
        var parameters = new FormData();
        parameters.append ("personne",  personne);
        parameters.append ("sexe",  sexe);
        // var parameters .= "&sexe=" + sexe;
        console.log(parameters);

        // prepare une requete POST vers le fichier 'ajax_insert.php'
        r.open("POST", "ajax_insert.php", true);

        // prepare l'entete de la requete POST
        r.setRequestHeader("Content-type",
        "application/x-www-form-urlencoded");

        // envoie de la requete POST avec les paramètres préparés plus haut
        r.send(parameters);
        // console.log(r.readyState+ ' '+r.status);

        document.getElementById("resultat").innerHTML = "Le prénom "+ personne +" a bien été inséré";

    }

})
