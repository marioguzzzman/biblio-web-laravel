		window.addEventListener("load", function() {


//INTENTO DE REDUCIR EL CÓDIGO POR MEDIO DE FOR
	// 		var bulletName = ['cero', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve', 'diez', ];
	// //
	// 			for (var i = 1; i < bulletName.length; i++) {
	// 				var uno = 'document.querySelector('input[name = "'+ bulletName[i] +'"]:checked').value;'
	// 				console.log(uno);
  //
	// 			}
	var sumar = document.querySelector('#sumar');

		  sumar.addEventListener("click", function() {

				var bulletName = ['cero', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve', 'diez', ];

		    uno = document.querySelector('input[name = "uno"]:checked').value;
		    dos = document.querySelector('input[name = "dos"]:checked').value;
		    tres = document.querySelector('input[name = "tres"]:checked').value;
		    cuatro = document.querySelector('input[name = "cuatro"]:checked').value;
		    cinco = document.querySelector('input[name = "cinco"]:checked').value;
		    seis = document.querySelector('input[name = "seis"]:checked').value;
		    siete = document.querySelector('input[name = "siete"]:checked').value;
		    ocho = document.querySelector('input[name = "ocho"]:checked').value;
		    nueve = document.querySelector('input[name = "nueve"]:checked').value;
		    diez = document.querySelector('input[name = "diez"]:checked').value;

		    result = parseInt(uno) + parseInt(dos) + parseInt(tres) + parseInt(cuatro) + parseInt(cinco) + parseInt(seis) + parseInt(siete) + parseInt(ocho) + parseInt(nueve) + parseInt(diez);

		    // result = parseInt(uno) + parseInt(dos); //TEST

		    document.getElementById("grade").innerHTML = result;

		    verError();

		    function verError() {

					if (uno == 0) {
					    document.querySelector('.unoVerError').style.display = 'block';
					 } else {
					    document.querySelector('.unoVerError').style.display = 'none';
					 }
					if (dos == 0) {
							document.querySelector('.dosVerError').style.display = 'block';
					 } else {
							document.querySelector('.dosVerError').style.display = 'none';
					 }
			 		if (tres == 0) {
							document.querySelector('.tresVerError').style.display = 'block';
					 } else {
							document.querySelector('.tresVerError').style.display = 'none';
		  		 }
					if (cuatro == 0) {
							document.querySelector('.cuatroVerError').style.display = 'block';
					 } else {
							document.querySelector('.cuatroVerError').style.display = 'none';
				 	 }
					if ( cinco== 0) {
							document.querySelector('.cincoVerError').style.display = 'block';
					 } else {
							document.querySelector('.cincoVerError').style.display = 'none';
					 }
			  	 if (seis == 0) {
					    document.querySelector('.seisVerError').style.display = 'block';
					 } else {
							 document.querySelector('.seisVerError').style.display = 'none';
					 }
					 if (siete == 0) {
							 document.querySelector('.sieteVerError').style.display = 'block';
					 } else {
							 document.querySelector('.sieteVerError').style.display = 'none';
					 }
					 if (ocho == 0) {
							 document.querySelector('.ochoVerError').style.display = 'block';
					 } else {
					     document.querySelector('.ochoVerError').style.display = 'none';
					  }
					 if ( nueve == 0) {
							 document.querySelector('.nueveVerError').style.display = 'block';
					 } else {
					 		 document.querySelector('.nueveVerError').style.display = 'none';
					 }
						if ( diez== 0) {
							 document.querySelector('.diezVerError').style.display = 'block';
						} else {
							 document.querySelector('.diezVerError').style.display = 'none';
						}

		    }; // cierre verError
		  }); //cierre sumar.addEventListener("click", function() {
		}); //on window
