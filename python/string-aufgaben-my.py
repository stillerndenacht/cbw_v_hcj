print("---- Aufgabe 9.1 ----------")
umlaut = "Isch hän än kommischet jefühl bei die 2.5 Sach, dat is janz schön vertüddelt."
umlautindex = []
countx = 0
for x in umlaut:
    if x == "ä" or x == "ö" or x == "ü":
        #umlauti = countx
        print(countx)
        print(x)
        umlautindex.append(countx)
    countx += 1
print(umlautindex)
print("Länge umlaut :", len(umlaut))

newumlaut = ""
for y in umlaut:
    if y == "ä":
        y = "&auml;"
    elif y == "ö":
        y = "&ouml;"
    elif y == "ü":
        y = "&uuml;"
    newumlaut += y
print(newumlaut)
print("Länge newumlaut :", len(newumlaut))

print("---- Aufgabe 9.2 ----------")

a = "VGhpcyBpcyBhIHRlc3QgZmlsZSBkYXRhIHRvIHVzZSBhIGxhbmd1YWdlIEJpbmFyeSBkYXRh"
b = "VGhpcyBpcyBhIhRlc3QgzmlsZSBkYXRhIHRvIHVzZSBhIGxhbmd1YWdlIEJpbmFyeSBkYXrh"

print("Vergleich : ",a.lower() == b.lower())

print("---- Aufgabe 9.3 ----------")
langtext = umlaut*10
#print(langtext)
pointbefore = False
counts = 0
for s in langtext:
    if s.isalpha():
        pointbefore = False
    #print("digit",s.isdigit(), "vor if", pointbefore)
    if s.isdigit() and pointbefore:
        #print("im if", pointbefore)
        counts -= 1
        print(counts)
        pointbefore = False
    elif s == ".":
        counts += 1
        pointbefore = True
        print(counts)
    elif s == "!" or s == "?":
        counts +=1
    
print("Anzahl Sätze: ",counts) 

countb = 0
for b in langtext:
    if b.isalpha():
        countb += 1
print("Anzahl Buchstaben: ",countb)        

