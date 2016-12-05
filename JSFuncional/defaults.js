const movies = ["Suicide Squad","Batman v Superman - Dawn of Justice", "Zootopia","The Conjuring 2","Deadpool"];

/*
	for (var i = 0; i < movies.length; i++) {
		console.log(movies[i]);
	}
*/

/* definir funções com a palavra reservada 'const'
	const add = (x,y) => x + y
*/
/* problema ao definir com a palavra reservada 'let'
	let add = (x,y) => x + y
*/
/* a função add passa a ser uma 'variavel' com o valor 50
	add = 50
*/

movies.forEach(movie => console.log(movie));