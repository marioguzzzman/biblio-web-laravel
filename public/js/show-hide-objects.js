	window.addEventListener("load", function() {

		var activities = document.querySelector(".activitySelector"); //con esto podre hacer una funcion que permita ver u ocultar diferentes inputs?, como paso parametros?
	  verNuevaCategoria();



	  /*
	  |------------------------------------------
	  | FUNCIONES
	  |------------------------------------------
	  */

	  //--------VER NUEVA CATEGORIA
	  function verNuevaCategoria() {
			var seleccionCategoria = document.querySelector(".seleccionCategoria");
	    seleccionCategoria.addEventListener("change", function() {

	      var valor = document.querySelector(".seleccionCategoria").value;

	      if (valor == 0 | "") {
	        document.querySelector('.nuevaCategoria').style.display = 'block';
	      } else {
	        document.querySelector('.nuevaCategoria').style.display = 'none';
	      }
	      // console.log(valor);
	    }); //cierre addEventListener
	  } //cierre funcion verNuevaCategoria


	}); //on window
