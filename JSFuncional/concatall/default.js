const { booksGenres } = require('../booksGenres.js');

let booksById = [];

booksGenres.forEach(genre =>
	genre.books.forEach(book =>
		booksById.push(book.id)
	)
);

console.log(booksById);