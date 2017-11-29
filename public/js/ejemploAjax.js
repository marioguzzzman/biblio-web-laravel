window.addEventListener("load", function() {

  getPaises();

  function getPaises() {

    var ajax = new XMLHttpRequest(); //paso 1 este es el objeto similar al PDO

    ajax.onreadystatechange = function() {

      if (ajax.readyState == 4 && ajax.status == 200) { //respuesta cruda de la api en formato json
        // console.log(ajax.responseText); // el if es impostante porque hay varias vueltas de pedidos de ajaxx
        var rtaJSON = ajax.responseText; // string
        var rta = JSON.parse(rtaJSON).contenido; //me devuelve una string que tengo que parsear para acceder al atributo: contenido
        var rtaArray = Object.entries(rta); //tengo que transformar el objeto del parse y transformarlo en un array

        var select = document.querySelector("select");

        //recorre el array con los paises
        rtaArray.forEach(function(pais) {
          var optionNueva = document.createElement("opction");
          optionNueva.innerText = pais[0];
          optionNueva.value = pais[1];
          select.append(optionNueva);
        });

      };

    };

    ajax.open("GET", "pilote.techo.org/?do=api.getPaises", true);
    ajax.send();
  };
});
