const { booksGenres } = require("../booksGenres.js");
const { books } = require("../books.js");

/*Array.prototype.concatAll = function() {
    let result = [];

    this.forEach(items => 
        result = result.concat(items)
    );

    return result;
}

const coverArts = booksGenres.map(genre =>
    genre.books.map(cover => 
        cover.coverarts.map(art =>art)
    ).concatAll()
).concatAll();

*/

Array.prototype._reduce = function (f) {
  let acc = this[0];
  for (let i = 1; i < this.length; i++) {
    acc = f(acc, this[i]);
  }
  return acc;
};

/*const maxArt = coverArts._reduce((max ,current) =>{
    const maxSize = max.width * max.height;
    const currentSize = current.width * current.height;

    return (currentSize > maxSize) ? current : max;
});

console.log(maxArt);*/
const maxBooksPages = books.map((_maxpage) => _maxpage.pages);

const totalPagesAllBooks = maxBooksPages._reduce(
  (acc, current) => acc + current
);

console.log(totalPagesAllBooks);
