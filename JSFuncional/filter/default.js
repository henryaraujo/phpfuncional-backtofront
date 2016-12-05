const { books } = require('../books.js');

let booksMaxPages = [];

books.forEach(book => {
		if(book.pages > 400){
			booksMaxPages.push({book})
		}
	}
);

console.log(booksMaxPages);