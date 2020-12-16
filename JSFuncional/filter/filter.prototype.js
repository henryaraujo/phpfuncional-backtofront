const { books } = require("../books.js");

Array.prototype._filter = function (f) {
  let result = [];
  this.forEach((item) => {
    if (f(item)) {
      result.push(item);
    }
  });
  return result;
};

//const booksMaxPages = books._filter(book => book.pages > 400);
const funcBookMax = (book) => book.pages > 400;
const booksMaxPages = books._filter(funcBookMax);

console.log(booksMaxPages);
