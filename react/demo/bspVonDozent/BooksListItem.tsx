// damit das funktioniert muss es in Kapitel 09 Listing 22 eingesetzt werden

import React from 'react';
import { Book } from './Book';
import { StarBorder, Star } from '@mui/icons-material';

type Props = {
  book: Book;
  // Diese Komponente BooksListItem akzeotiert NUR Funktionen
  // als Prop, die eine Buch-ID als number und ein rating als number
  // als Eingabe hat und die nichts zurückliefert (void)
  onRate: (bookId: number, rating: number) => void;
};

const BooksListItem: React.FC<Props> = ({ book, onRate }) => {
  return (
    <tr>
      <td data-testid="title">{book.title}</td>
      <td data-testid="author">{book.author}</td>
      <td data-testid="isbn">{book.isbn}</td>
      <td>
        {Array(5)
          .fill('')
          .map((value, index) => (
            <button
              key={index}
              onClick={() => onRate(book.id, index + 1)}
              data-testid="rating"
            >
              {book.rating < index + 1 ? (
                <StarBorder data-testid="notRated" />
              ) : (
                <Star data-testid="rated" />
              )}
            </button>
          ))}
      </td>
    </tr>
  );
};

export default BooksListItem;
