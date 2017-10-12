document.addEventListener("DOMContentLoaded", function(event){
    document.getElementById("delete").addEventListener("click", function(event){
        event.preventDefault();
        ajax();
    });

    function ajax(){
        var r = new XMLHttpRequest();
        var p = document.getElementById("personne");

        var personne = p.value;
        // console.log(personne);

        var parameters = "personne=" + personne;
        // console.log(parameters);

        r.open("POST", "ajax_delete.php", true);

        r.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        r.send(parameters);

        r.onreadystatechange = function(){
            if (r.readyState == 4 && r.status == 200){
                // console.log(r.responseText);
                var obj = JSON.parse(r.responseText);
                // console.log(obj['montableau']);

                document.getElementById("resultat").innerHTML = obj.form ;
            }
        };

    }

})
