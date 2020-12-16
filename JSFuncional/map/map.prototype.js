const { books } = require("../books.js");

Array.prototype._map = function (f) {
  let result = [];

  this.forEach((item) => result.push(f(item)));

  return result;
};

//const booksIdAndTitle = books._map(book => ({id:book.id, title: book.title}));
const funcBookMap = (book) => ({ id: book.id, title: book.title });

const booksIdAndTitle = books._map(funcBookMap);

console.log(booksIdAndTitle);
