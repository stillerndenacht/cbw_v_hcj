export type Site = {
    pnumber: number;
    words: number;
  };
 
export type Book = {
  // any darf nicht implizit zugewiesen werden.
  id: number;
  title: string;
  author: string;
  isbn: string;
  rating: number;
  wert ?: number;
  seite ?: Site[]; // Listen sind nicht einzelne Elemente in der Logik
  // der typsicheren Sprachen.
};

const buch : Book[] =[ {
    id : 23,
    title : "23 + 23 ist meist 46",
    author : "Centurio Zahlmeister";
    isbn : "53abs555",
    rating : 4,
    seite : [
        {pnumber : 23, words : 23}, 
        {pnumber : 24, words : 48}
    ]
    },
    {
    id : 46,
    title : "Alles über die 46",
    author : "Centurio Zahlmeister";
    isbn : "46aaa56789",
    rating : 2,
    wert : 5
    }
]