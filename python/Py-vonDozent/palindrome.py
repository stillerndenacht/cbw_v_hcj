woerter = ["radar", "level", "hallo", "welt", "rotor", "python", "madam", "auto"]
palindrome = []

# Schleife über die Liste der Wörter
for wort in woerter:
    laenge = len(wort)
    ist_palindrom = True
    for i in range(laenge // 2):
        if wort[i] != wort[laenge - i - 1]:
            ist_palindrom = False
            break
    
    # Wenn das Wort ein Palindrom ist, füge es zur Liste der Palindrome hinzu
    if ist_palindrom:
        palindrome.append(wort)

