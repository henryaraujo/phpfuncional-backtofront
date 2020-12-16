const { books } = require("../books.js");

//const booksMaxPages = books._filter(book => book.pages > 400);
const funcBookMax = (book) => book.pages > 400;
const booksMaxPages = books.filter(funcBookMax);

console.log(booksMaxPages);
