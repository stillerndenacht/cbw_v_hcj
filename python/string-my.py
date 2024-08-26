singleline = "123456"
print("singleline", singleline, len(singleline))
singleline2 = "\t123456" 
# \t = 1 Zeichen
print("singleline2", singleline2, len(singleline2))
singleline3 = "\n123456" 
# \n = 1 Zeichen
print("singleline3", singleline3, len(singleline3))
multiline = """123456"""
print("multiline",multiline, len(multiline))
multiline2 = """
123456
""" 
# Enter = 1 Zeichen
print("multiline2",multiline2, len(multiline2))
multiline3 = """
    123456
""" 
# Tab = 4 Zeichen
print("multiline3",multiline3, len(multiline3))

print(singleline * 3) # Ergebnis 123456123456123456
print((singleline + " ") * 3) # Ergebnis 123456 123456 123456

zahl = 12345
# print("Zahl " + zahl) # TypeError: can only concatenate str (not "int") to str
print("Zahl " + str(zahl))
print("Zahl ", zahl)

#----------- Slicing -------------
variable = "Montag"
print(variable[-1::-5]) # Ergebnis gM

print("wort".upper()) # Ergebnis WORT
print("wORt".lower()) # Ergebnis wort
print("wort".capitalize()) # Ergebnis Wort
print("wORt".capitalize()) # Ergebnis Wort
print("wort wort wort".capitalize()) # Ergebnis Wort wort wort
print("wort wort wort".title()) # Ergebnis Wort Wort Wort

wort = "wort wort wort" # Immutable
wort.title() # verändert die Variable nicht 
print("print(wort)", wort)
print("print(wort.title())",wort.title())
wort2 = wort.title() # soll die Variable geändert werden muss sie neu zugewiesen werden
print("print(wort2)",wort2)

woerter = "wort1 wort2 wort3 , wort4, wort5"
woerter2 = woerter.split() # Standard ist split bei Leerzeichen
print(woerter2)
woerter3 = woerter.split(',') # Split bei bestimmten Zeichen, wobei das Zeichen entfällt
print(woerter3)
woerter4 = woerter.split('o') # Split bei bestimmten Zeichen
print(woerter4)

digit = "123".isdigit()
print(digit)

print("wort" in "Vorwort") # True
#Entfernen strip
# entfernt führende und folgende Leerzeichen
print("   wort ...  ".strip()) # Ergebnis 'wort ...'

# Ersetzung replace
print("   wort ...  ".replace(' ', '-')) # Ergebins '---wort-...--'

#join
join = ";".join(["wort", "wort", "wort"]) # Ergebnis wort;wort;wort
print(join)

#find
find = "von links nach rechts".find("s") # Ergebnis 8
print("find ",find)
rfind = "von links nach rechts".rfind("s") # Ergebnis 20
print("rfind ",rfind)

# ist ascii - Zeichen
ascii = "wort".isascii() # ist im ascii-code?
print("wort ",ascii)
ascii = "wortÆ".isascii() # Æ ist nur im UTF-8
print("wortÆ ",ascii)

# alpha - nur Buchstaben?
alpha = "wort".isalpha() # besteht nur aus Buchstaben?? True
print("wort ",alpha)
alpha2 = "wort42".isalpha() # besteht nur aus Buchstaben?? False
print("wort42 ",alpha2)

