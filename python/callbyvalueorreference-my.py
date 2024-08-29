######## Beispiel vom Dozent ###########
def addiere_eins_in_liste(eine_liste):
    for k, v in enumerate(eine_liste):
        eine_liste[k] += 1
    # KEIN RETURN HIER NÖTIG

# call-by-reference (mutable)
liste = [7, 8, 9]
addiere_eins_in_liste(liste)
print(liste)  # Änderung OHNE, dass die Funktion ein return ausführt.
#----------------------------------------------
def addiere(x):
    x += 5
    return x

# call-by-value (immutable)
x = 7
addiere(x)
print(x)  # Änderung nicht möglich, da IMMUTABLE bei Übergabe KOPIERT wird.
x = addiere(x)
print(x)

############ Beispiel Ende ############

print("\n--------- call by reference -------------------\n")

liste = [1, 5, 3]
print("Liste + id vor der Bearbeitung : ", liste, id(liste))
print("id's der Listenwerte : ", id(liste[0]), id(liste[1]), id(liste[2]))


def addiere_via_ref(refliste):
    count = 0
    # print("id der Liste in Funktion ",id(refliste))
    for i in refliste:
        # print("Wert und id in loop vor Änderung ",i, id(i))
        refliste[count] = i + 2  # nur so bleibt die Referenz gleich (oder enumerate s.o.)
        # i += 2  # das erhält nicht die Referenz
        # print("Wert und id in loop nach Änderung ", i, id(i))
        count += 1
    # print("refliste und id in Funktion nach Bearbeitung : ", refliste, id(refliste))
    # print(
    #     "Werte und id's der refliste : ",
    #     refliste[0],
    #     id(refliste[0]),
    #     refliste[1],
    #     id(refliste[1]),
    #     refliste[2],
    #     id(refliste[2]),
    # )

addiere_via_ref(liste)
print("Liste nach addieren mit call by refernce : ", liste)
print("Liste + id nach der Bearbeitung : ", liste, id(liste))

print("\n--------- call by value -------------------\n")

liste2 = [1, 5, 3]
print("Liste + id vor der Bearbeitung : ", liste2, id(liste2))
print("id's der Listenwerte : ", id(liste2[0]), id(liste2[1]), id(liste2[2]))

def addiere_via_wert(wert):
    print("Wert übergeben : ",wert)
    wert += 3
    print("Wert errechnet : ",wert)
    return wert

for i in range(len(liste2)):
    liste2[i] = addiere_via_wert(liste2[i])
    
print("Liste nach addieren mit call by value : ", liste2)
print("Liste + id nach der Bearbeitung : ", liste2, id(liste2))

print("\n--------- call by value Variante mit variablem Summand -------------\n")

liste3 = [1, 5, 3]
print("Liste + id vor der Bearbeitung : ", liste3, id(liste3))
print("id's der Listenwerte : ", id(liste3[0]), id(liste3[1]), id(liste3[2]))

def addiere_via_wert(wert, zahl): # Zahl wird bei Aufruf übergeben 
    print("Wert übergeben : ",wert)
    wert += zahl
    print("Wert errechnet : ",wert)
    return wert

for i in range(len(liste3)):
    liste3[i] = addiere_via_wert(liste3[i], 10)
    
print("Liste nach addieren mit call by value : ", liste3)
print("Liste + id nach der Bearbeitung : ", liste3, id(liste3))