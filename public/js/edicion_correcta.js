		window.addEventListener("load", function() {

			var borrar = document.querySelectorAll(".deleteElement");
			borrar.forEach(function(elem) {
				elem.addEventListener('submit', ConfirmDelete);
			});

			function ConfirmDelete(event){
				var x = confirm("¿Realmente querés borrar este elemento?");

				if (x){
						 // return true;
				}else{
					 event.preventDefault();
			}
			}

		}); //on window
