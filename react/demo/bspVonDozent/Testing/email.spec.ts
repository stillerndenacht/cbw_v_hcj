import { isValidEmail } from './email';

describe('isValidEmail', () => {
    it('kein @ eingeben', () => {
        expect(isValidEmail("matthofgmx.de")).toBe(false);
    });
    
    it('. am ende?', () => {
        expect(isValidEmail("matthof@gmx.de.")).toBe(false);
    });

});
