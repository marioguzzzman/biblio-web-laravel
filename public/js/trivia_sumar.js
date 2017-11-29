// window.addEventListener("load", function(){

var sumar= document.querySelector('#sumar');

 sumar.addEventListener("click", function(){

        // document.getElementById("formTrivia").onsubmit = function() {

  				uno   = document.querySelector('input[name = "uno"]:checked').value;
  				dos   = document.querySelector('input[name = "dos"]:checked').value;
  				tres   = document.querySelector('input[name = "tres"]:checked').value;
  				cuatro   = document.querySelector('input[name = "cuatro"]:checked').value;
  				cinco  = document.querySelector('input[name = "cinco"]:checked').value;
  				seis = document.querySelector('input[name = "seis"]:checked').value;
  				siete = document.querySelector('input[name = "siete"]:checked').value;
  				ocho  = document.querySelector('input[name = "ocho"]:checked').value;
  				nueve = document.querySelector('input[name = "nueve"]:checked').value;
  				// diez  = document.querySelector('input[name = "diez"]:checked').value;

  				// result = uno + dos + tres + cuatro + cinco + seis + siete + ocho + nueve + diez;
  				result = parseInt(uno) + parseInt(dos) + parseInt(tres) + parseInt(cuatro) + parseInt(cinco) + parseInt(seis) + parseInt(siete) + parseInt(ocho) + parseInt(nueve);

  				document.getElementById("grade").innerHTML = result;
      // };

			   if (uno == 0){
					 var mal1 = document.querySelector('.uno').style.color = "red";
				 } else {
					 var mal1 = document.querySelector('.uno').style.color = "black";
				 }


				grading = [
					{
						score:0,feedback:"Me parece que podés hacerlo mejor",
            image: "0.jpg"},
					{
						score: 1,
						image: "../img-respuestas/0.jpg"},
					{
						score: 2,
						image: "../img-respuestas/0.jpg"},
					{
						score: 3,
						image: "../img-respuestas/30.jpg"},
					{
						score: 4,
						image: "../img-respuestas/30.jpg"},
					{
						score: 5,
						image: "../img-respuestas/50.jpg"},
					{
						score: 6,
						image: "../img-respuestas/50.jpg"},
					{
						score: 7,
						image: "../img-respuestas/70.jpg"},
					{
						score: 8,
						image: "../img-respuestas/70.jpg"	},
					{
						score: 9,
						image: "../img-respuestas/70.jpg"	},
					{
						score: 10,
						image: "../img-respuestas/100.jpg"}
				];

				for (i = 0; i < grading.length; i++)
        {
					if (result == grading[i].score)
          {
						result = grading[i].feedback + "<br /><img src='" + grading[i].image + "'width='400'/>";
					}
				}

			// return false; // para no reargar la página
    }); //termina la funcion submit


		// });
