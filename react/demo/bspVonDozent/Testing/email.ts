// matthof@gmx.de => true ; matthofgmx.de => false
export function isValidEmail(email: string): boolean {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if(email[email.length-1] == '.') return false;

    return re.test(email);
}
