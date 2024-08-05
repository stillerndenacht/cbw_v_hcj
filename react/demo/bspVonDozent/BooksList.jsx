import { useState } from 'react';
import './BooksList.css';
import BooksListItem from './BooksListItem';

const initialBooks = [
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
  },
];

function BooksList() {
  // automatische Aktualisierung bei Änderung
  const [books, setBooks] = useState(initialBooks);

  /* Die Aktualisierung mit handleRate vornehmen,
  Aufruf aus einer untergeordneten Komponente.
  Welches Listenelement soll geändert werden? id
  Was soll geändert werden? rating */
  function handleRate(id, rating) {
    // Über setBooks ändern wir die Datenstruktur
    // seBooks arbeitet auf der gesamten Liste
    // und nicht auf einem Element.
    // Wir müssen setBooks nun mitteilen, in welcher
    // Weise die Datensruktur verändert werden soll
    // Wir iterieren über die Liste, bis wir das zu ändernde
    // Element gefunden haben
    setBooks((prevState) => {
      return prevState.map((book) => {
        if (book.id === id) {
          book.rating = rating;
        }
        return book;
      });
    });
  }

  if (books.length === 0) {
    return <div>Keine Bücher gefunden</div>;
  } else {
    return (
      <table>
        <thead>
          <tr>
            <th>Titel</th>
            <th>Autor</th>
            <th>ISBN</th>
            <th>Bewertung</th>
          </tr>
        </thead>
        {/* Wir müssen nun den untergeordneten 
        Komponenten das handleRate verfügbar machen (also erlauben, 
        die Datenstruktur zu ändern. ) */}
        <tbody>
          {books.map((book) => (
            <BooksListItem key={book.id} book={book} onRate={handleRate} />
          ))}
        </tbody>
      </table>
    );
  }
}

export default BooksList;
