// damit das funktioniert muss es in Kapitel 09 Listing 22 eingesetzt werden
import renderer from 'react-test-renderer';
import { fireEvent, render, screen, act } from '@testing-library/react';
import BooksListItem from './BooksListItem';

describe('BooksListItem', () => {
  describe('Snapshots', () => {
    it('should match the snapshot', () => {
      const book = {
        id: 2,
        title: 'Clean Code',
        author: 'Robert C. Martin',
        isbn: '978-0132350884',
        rating: 4,
      };

      const snapshot = renderer
        .create(<BooksListItem book={book} onRate={() => {}} />)
        .toJSON();
      expect(snapshot).toMatchSnapshot();
    });
  });
  describe('Rendering', () => {
    it('should render correctly for a given dataset', () => {
      const book = {
        id: 2,
        title: 'Clean Code',
        author: 'Robert C. Martin',
        isbn: '978-0132350884',
        rating: 4,
      };
      render(
        <table>
          <tbody>
            <BooksListItem book={book} onRate={() => {}} />
          </tbody>
        </table>
      );
      expect(screen.getByTestId('title')).toHaveTextContent('Clean Code');
      expect(screen.getByTestId('author')).toHaveTextContent(
        'Robert C. Martin'
      );
      expect(screen.getByTestId('isbn')).toHaveTextContent('978-0132350884');
      expect(screen.getAllByTestId('rating')).toHaveLength(5);
      expect(screen.getAllByTestId('rated')).toHaveLength(4);
      expect(screen.getAllByTestId('notRated')).toHaveLength(1);
    });
  });
  describe('Rating', () => {
    // Definiert eine Test-Suite für das Rating-Feature der BooksListItem-Komponente
    it('should call the onRate function correctly', () => {
      // Ein Buch-Objekt mit Testdaten
      const book = {
        id: 2,
        title: 'Clean Code',
        author: 'Robert C. Martin',
        isbn: '978-0132350884',
        rating: 4,
      };
  
      // Mock-Funktion für onRate, um die Funktion zu testen, 
      // ohne echte Implementierung
      // Mit dem Platzhalter fn() kann man testen, ob die Funktion mit
      // den richtigen Argumenten aufgerufen wurde. 
      const onRate = jest.fn();
  
      // Rendert die BooksListItem-Komponente in eine Tabelle
      render(
        <table>
          <tbody>
            <BooksListItem book={book} onRate={onRate} />
          </tbody>
        </table>
      );
  
      // Simuliert einen Klick auf das dritte Rating-Element (index 2)
      // Hier soll rating auf 3 gesetzt werden
      fireEvent.click(screen.getAllByTestId('rating')[2]);
  
      // Erwartet, dass die onRate-Funktion mit den Argumenten 2 und 3 aufgerufen wird
      // Wurde die Funktion so korrekt aufgerufen?
      expect(onRate).toHaveBeenCalledWith(2, 3);
    });
  });
  
});
