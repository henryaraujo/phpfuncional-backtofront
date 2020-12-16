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
).concatAll();*/

// let largestSize = -Infinity;
// let largestBoxart;

// maxBooksPages.forEach(boxart => {
//     const currentSize = boxart.width * boxart.height;

//     if (currentSize > largestSize) {
//         largestSize = currentSize;
//         largestBoxart = boxart;
//     }
// });

// log(largestBoxart);

const maxBooksPages = books.map((_maxpage) => _maxpage.pages);

const totalPagesAllBooks = maxBooksPages.reduce((acc, current) => {
  console.log(`(${acc}),(${current})`);
  return acc + current;
});

console.log(totalPagesAllBooks);
