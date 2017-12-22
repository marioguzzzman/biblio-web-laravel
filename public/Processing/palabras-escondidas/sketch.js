/*Trataremos de ir implementando nuevas funcionalidades:
3) Que puedan aparecer diferentes textos cada vez que se inicia el programa

1) Que el texto aparezca en diferentes lugares cuando se inicia el programa
2) Que haya diferentes efectos cuando se da click (quizas que se peudan setear por dumero diferentes eefectos
esto podria tambien los colores.)
2.1 entonces un numero asigna un random de colores que indica que hay un una diferencia
4) Que puedan aparecer diferentes textos cada vez que se da click izquierdo
5) hacer que los textos aparezcan en diferentes lugares
6) pasar todo a mayuscula, usar RiTa
7) si oprimen enter pueden escribir un texto y verlo en la pantalla
8) si aprietan la letra z se borra todo y el programa comienza de vuelta?

*/

//objeto de javacript
var circulo = {
	x: 500,
	y: 300,
	diametro: 100,
};

var col = {
	r: 218,
	g: 160,
	b: 221,
};

var texto = {
	

};

//	var colorMouse = (random (0,255),random (0,255),random (0,255) );

var ladoA = ["todas las bibliotecas son infinitas", "Siempre hay que tener una buena historia", "!Salvese quien lea!", ]

s = "todas las bibliotecas son infinitas";

function setup() {
	createCanvas(windowWidth, windowHeight);
	noCursor();
}

function draw() {

	if (mouseIsPressed) {
	//	background(0,);

//aparecen circulos por todos lados
		circulo.x = random(0, windowWidth);
		circulo.y = random(0, windowHeight);
		fill(50, 100, 170, 70); // no funciono tanto con opacidad
		ellipse(circulo.x, circulo.y, circulo.diametro, circulo.diametro)
//</aparecen circulos por todos lados>


		rectMode(CENTER);
		fill(190, 10); // si le pongo el mismo color que el fondo hago que desaparezcan las letras
		noStroke();
		textSize(60);
		text("En la lectura \nhay siempre un secreto", windowWidth / 2, windowHeight / 2, windowWidth / 3, windowHeight / 2);

	} else {//////--------------------------------------
		background(col.r, col.g, col.b, 10);

		fill(50, 100, 170); // no funciono tanto con opacidad
		ellipse(mouseX, mouseY, circulo.diametro, circulo.diametro)

		textAlign(CENTER, CENTER);
		fill(col.r, col.g, col.b, 7); // si le pongo el mismo color que el fondo hago que desaparezcan las letras
		noStroke();
		textSize(60);
		text(s, windowWidth / 2, windowHeight / 2, windowWidth / 3, windowHeight / 2);
	}

	//console.log("hola");
	console.log("donde estas");

}