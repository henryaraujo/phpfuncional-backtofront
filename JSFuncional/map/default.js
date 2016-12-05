const { books } = require('../books.js');

let booksIdAndTitle = [];

books.forEach(book => 
	booksIdAndTitle.push({id:book.id , title: book.title})
);

console.log(booksIdAndTitle);