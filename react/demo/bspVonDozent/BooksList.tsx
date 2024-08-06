import React from 'react';
import { Book } from './Book';
import { Site } from './Site';
import BooksListItem from './BooksListItem';

const page : Site = {
  pnumber : 15,
  words : 800,
};

const books: Book[] = [
  {
    id: 1,
    title: 'JavaScript - das umfassende Handbuch',
    author: 'Philip Ackermann',
    isbn: '978-3836286299',
    rating: 5,
  },
  {
    id: 2,
    title: 'Clean Code',
    author: 'Robert Martin',
    isbn: '978-0132350884',
    rating: 4,
  },
  {
    id: 3,
    title: 'Design Patterns',
    author: 'Erich Gamma',
    isbn: '978-0201633610',
    rating: 5,
    seite : page,
  },
  {
    id: 4,
    title: 'Design Patterns',
    author: 'Erich Gamma',
    isbn: '978-0201633610',
    rating: 5,
    wert : 15.5,
  },
];

const BooksList: React.FC = () => {
  return (
    <ul>
      {books.map((book) => (
        <BooksListItem key={book.id} book={book} />
      ))}
    </ul>
  );
};

export default BooksList;
