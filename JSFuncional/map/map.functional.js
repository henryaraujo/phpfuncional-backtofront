const { books } = require('../books.js');
/*
	criando funcao direto no map
	const booksIdAndTitle = books.map(book => ({id:book.id, title: book.title}));
*/
const funcBookMap = book => ({id:book.id, title: book.title});

const booksIdAndTitle = books.map(funcBookMap);

console.log(booksIdAndTitle);