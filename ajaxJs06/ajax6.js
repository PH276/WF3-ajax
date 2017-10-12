document.addEventListener("DOMContentLoaded", function(event){
    ajax(null);
    document.getElementById("submit").addEventListener("click", function(event){
        event.preventDefault();
        var p = document.getElementById("personne");

        var personne = p.value;
        // console.log(personne);

        var parameters = "personne=" + personne;
        ajax(parameters);
    });

    function ajax(para){
        var r = new XMLHttpRequest();

        r.open("POST", "ajax6.php", true);

        r.setRequestHeader("Content-type",
        "application/x-www-form-urlencoded");

        r.send(para);

        r.onreadystatechange = function(){
            // console.log(r.responseText);
            if (r.readyState == 4 && r.status == 200){

                var obj = JSON.parse(r.responseText);
                // console.log(obj['montableau']);

                document.getElementById("resultat").innerHTML = obj['montableau'];
            }
        };

    }

})
