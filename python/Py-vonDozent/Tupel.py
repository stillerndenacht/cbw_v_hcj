
#Tupel
# tupel sind listen recht ähnlich
# ALlerdings Immutable
b= [1,2,3,4]
a = (1, 2, 3, 4, 5)

print(a[3])

#a[10]

# besonderheit der Schreibweise
kein_tuple = 2
print(type(kein_tuple))

# wird stattdesen so geschrieben
ein_tuple = (2,)
print(type(ein_tuple))

# packing
# es ist möglich die klammern weg zu lassen
datum = 21, 8, 1987
print(type(datum))
x = 21,




#Tuple Unpacking
# man kann sie auch wieder entpacken:
# wir brauchen genauso viele variablen wie elmente im tupel enthalten sind
datum = 21, 8, 2024
tag, monat, jahr = datum
print("Tag: ", tag)
print("Monat: ", monat)
print("Jahr: ", jahr)

# auch ohne klammern möglich 
a, b = 10, 20
a, b = b, a
print(a ," ",b)

# wir brauchen genauso viele variablen wie im String enthalten sind 
a, b, c = "efg"
print(a)

c = ("f",2,"f",2 ,(1,1))


zahlen= (11,12,13,14,15,16)
elf , *andere , sechzehn =zahlen
print(elf," ", sechzehn)
print(andere)# * sorgt dafür das alle übrigen Werte gespeichert werden (Als Liste)

zahlen= (0,1,2,3,4,5,6,7,8,9)
# eins, zwei ,drei= zahlen


#print(eins,zwei,drei)
*andere, = zahlen

#was nicht geht:
# *andere , zahl , *weitere = zahlen


#Immutabel heißt nicht zwingend unveränderlich! 
a=([],[]) 

#Bei der Erzeugung eines neuen Tupels werden die Referenzen festgelegt
#Verweist eine solche Referenz auf eine Instanz eines mutablen Datentyps 
#kann sich dessen Wert trotzdem ändern
print()
print(a)
print("Immutabel")
a[0].append("ich bin angehangen")
a[1].append("ich bin auch da")
a[0].append("ich auch")
print(a)
print()




#Es sind nur die referenzen immutabel
zahlen =(1,2,2,3,4,5,6,2,7,8)
anzahl = zahlen.count(2)
größe = len(zahlen)
maximum =max(zahlen)
print(anzahl)
print(größe)
print(maximum)

print()
print("\nalle Zahlen:")
for zahl in zahlen:
    print(zahl)
print()



#tuppel verketten
a= ([],1, 2, 3, 4, 5)
b=(4,3,2,1)
c=b+a
print(c)
a[0].append(1)
print(c)