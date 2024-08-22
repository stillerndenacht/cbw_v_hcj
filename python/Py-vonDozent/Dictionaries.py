#Ein Dictionary enthält beliebig viele Schlüssel-Wert-Paare
#engl. key/ value pairs

#dict (mutabel)

#Hinter dem letzten Schlüssel-Wert-Paar kann ein weiteres Komma stehen, es wird aber nicht benötigt
a =(1,2,3,2,3,2,2,2)
b=a[1]


woerterbuch = {
"Germany": "Deutschland",
"Spain": "Spanien",
"France": "Frankreich",
}


print(woerterbuch)

print(dict([("Germany", "Deutschland"), ("Spain", "Spanien")]))

print(dict(Germany="Deutschland", Spain="Spanien"))
a=dict(Germany="Deutschland", Spain="Spanien")
print(type(a["Germany"]))
# Jeder Schlüssel muss im Dictionary eindeutig sein

d = {
"Germany": "Deutschland",
"Germany": "Bayern"
}
#es gibt keinen fehler aber nur das letze element mit dem schlüssel wird gespeichert 
print(d)

#die Werte eines Dictionarys müssen nicht eindeutig zu sein, dürfen also mehrfach vorkommen
d = {
"Germany": "Deutschland",
"Allemagne": "Deutschland"
}

# Schlüssel und werte müssen nicht strings sein
mapping = {
0: 1,
"abc": 0.5,
1.2e22: [1,2,3,4],
(1,3,3,7): "def",
 2: [2,3,4,5] 
}


#In einem Dictionary können beliebige Instanzen, seien sie mutabel oder immutabel,
#als Werte verwendet werden. Beim Schlüssel dürfen jedoch nur Instanzen unveränderlicher
#(immutabler) Datentypen verwendet werden

#geht nicht
# mapping={
# [1,2,3,4]:"def"
# }

#Iteration
print()
print("ausgabe")
for key in woerterbuch:
    print(key)
print()

for value in woerterbuch.values():
    print(value)

# oder kombiniert
for key, value in woerterbuch.items():
    print(key, "->", value)

#die Größe des Dictionarys nicht verändern, während es
#in einer Schleife durchlaufen wird. 
#Also durch Hinzufügen oder Löschen eines Schlüssel-Wert-Paares

for key in woerterbuch:
    #del woerterbuch[key]
    print(key)

    # RuntimeError: dictionary changed size during iteration



# Operratoren
woerterbuch = {
"Germany": "Deutschland",
"Spain": "Spanien",
"France": "Frankreich"
}

# Gibt Anzahl der wert paare
print(len(woerterbuch))

# Zugriffe über den key
print(woerterbuch["Germany"])

#ersetzen (nur ein Beispiel)
print()
woerterbuch["Germany"] = "Bayern"
print(woerterbuch["Germany"])
print()

# Fehler wenn es den key nicht gibt
#woerterbuch["Greece"]
#KeyError: 'Greece'


# Die Schlüssel eines Dictionarys werden beim Zugriff anhand ihrer Werte miteinander
# verglichen und nicht anhand ihrer Identitäten
werte = {
    1 : "wert",
    2 : "nummer",
    3 : "name"
}

print(werte[1.0])
print(werte[1])
# Das liegt daran, dass die Schlüssel intern
# durch ihren Hash-Wert repräsentiert werden


#Löschen (nicht in schleifen nutbar)
del woerterbuch["Germany"]

#Auf bestimmte Schlüssel testen (gibt true oder false zurück)
print("France" in woerterbuch)
print("Schweiz" not in woerterbuch)

# Zwei Dictionarys kombinieren
print({"France": "Frankreich"} | {"Spain": "Spanien"})

# ähnlich zu += 
d = {}
print(d)
d |= {"France": "Frankreich"}
print(d)
d |= {"Spain": "Spanien"}
print(d)
# Ab python Version 3.9



bundesländer = {"Hamburg" : ["hamburg",100,100000]}
print(bundesländer["Hamburg"])


