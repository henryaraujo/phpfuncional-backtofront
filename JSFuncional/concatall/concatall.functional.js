const { booksGenres } = require("../booksGenres.js");

Array.prototype.concatAll = function () {
  let result = [];

  this.forEach((items) => (result = result.concat(items)));

  return result;
};

const booksById = booksGenres
  .map((genre) => genre.books.map((book) => book.id))
  .concatAll();

console.log(booksById);
