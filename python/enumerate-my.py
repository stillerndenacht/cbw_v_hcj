worte = ["das","ist","eine","Liste","mit","zwanzig","völlig","unzufällig","also","absichtsvoll","durch","viel","Nachdenken","Grübeln","und","überaus","komplizierte","Auswahlmethoden","gewählten","Worten"]
worteenum = enumerate(worte, 1) # enumerate(liste die gelooped wird, erster Indexwert der vergeben wird) -- der Startwert kann auch 5 sein - Dann bekommt "das" die 5
print(list(worteenum))
# Ergebnis:
# [(1, 'das'), (2, 'ist'), (3, 'eine'), ...]

# what to do with that?

for x, y in enumerate(worte):
    y += "X"
    print(f"index x : {x} wort y : {y}")

# Ergebnis:
# index x : 0 wort y : dasX
# index x : 1 wort y : istX
# index x : 2 wort y : eineX
# ...
# ..