window.addEventListener("load",function(){

getProvincias();

	function getProvincias(){

			var ajax = new XMLHttpRequest();

			ajax.open("GET", "http://pilote.techo.org/?do=api.getRegiones?idPais=1", true);

			ajax.onreadystatechange = function() {

				//console.log("estoy ejecuando el onreadystatechange")
				//console.log(ajax.readyState)

				if (ajax.readyState == 4 && ajax.status == 200) {
					//Primero tengo la rta cruda de la api en formato json
					var rtaJSON = ajax.responseText; //esto es un string

					//Esa respuesta la parseo para pasarla a lenguaje javascript y accedo al atributo contenido
					var rta = JSON.parse(rtaJSON).contenido;
					//console.log(rta);

					//Esa rta en formato objeto la paso a formato array
					var rtaArray = Object.entries(rta);
					//console.log(rtaArray);

					var select = document.querySelector(".provincias");

					//finalmente recorro ese array de paises
					rtaArray.forEach(function(provincia){
						//console.log(pais);
						var optionNueva = document.createElement("option");
						optionNueva.innerText = provincia[0];
						optionNueva.value = provincia[1];
						select.append(optionNueva);
					});
				}
			}
			ajax.send();
	}


	var selectProvincias = document.querySelector(".provincias");
	selectProvincias.addEventListener("change",function(){
		var id_provincia = selectProvincias.value;
		getCiudades(id_provincia);
	});


	function getCiudades(idprovincia){
		var ajax = new XMLHttpRequest();

			ajax.open("GET", "http://pilote.techo.org/?do=api.getCiudades?idRegionLT="+idprovincia, true);

			ajax.onreadystatechange = function() {

				//console.log("estoy ejecuando el onreadystatechange")
				//console.log(ajax.readyState)

				if (ajax.readyState == 4 && ajax.status == 200) {
					//Primero tengo la rta cruda de la api en formato json
					var rtaJSON = ajax.responseText; //esto es un string

					//Esa respuesta la parseo para pasarla a lenguaje javascript y accedo al atributo contenido
					var rta = JSON.parse(rtaJSON).contenido;
					//console.log(rta);

					//Esa rta en formato objeto la paso a formato array
					var rtaArray = Object.entries(rta);
					//console.log(rtaArray);

					var select = document.querySelector(".ciudades");

					select.innerHTML = '<option value="">Seleccione</option>'
					//finalmente recorro ese array de paises
					//select.empty();
					rtaArray.forEach(function(ciudad){
						//console.log(pais);
						var optionNueva = document.createElement("option");
						optionNueva.innerText = ciudad[0];
						optionNueva.value = ciudad[1];
						select.append(optionNueva);
					});
				}
			}
			ajax.send();
	}

})
