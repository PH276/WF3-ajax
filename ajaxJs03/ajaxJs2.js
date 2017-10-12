document.addEventListener("DOMContentLoaded", function(event){
    document.getElementById("personne").addEventListener("change", function(event){
        event.preventDefault();
        ajax();
    });

    function ajax(){
        var r = new XMLHttpRequest();
        var p = document.getElementById("personne");

        var personne = p.options[p.selectedIndex].value;
        // console.log(personne);

        var parameters = "personne=" + personne;
        // console.log(parameters);

        r.open("POST", "ajaxJs2php.php", true);

        r.setRequestHeader("Content-type",
        "application/x-www-form-urlencoded");

        r.send(parameters);

        r.onreadystatechange = function(){
            if (r.readyState == 4 && r.status == 200){
                // console.log(r.responseText);
                var obj = JSON.parse(r.responseText);
                // console.log(obj['montableau']);

                document.getElementById("resultat").innerHTML = obj['montableau'];
            }
        };

    }

})
