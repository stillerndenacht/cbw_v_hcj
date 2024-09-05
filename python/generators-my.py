def wert_liefern():
    yield "Albert" # yield macht die Funktion zum Generator
    yield "Boris"
    yield "Marlene"

werte_generator = wert_liefern()

print(next(werte_generator)) # Aufruf des 1. Wertes über next()
print(next(werte_generator)) # Aufruf des 2. Wertes über next()
print(next(werte_generator)) # Aufruf des 3. Wertes über next()

print(next(wert_liefern())) #  ohne Variable kommt immer der erste Wert
print(next(wert_liefern()))
print(next(wert_liefern()))

print("\n------------------------\n")
import random
import time

def namen_generieren(n):
    vornamen = ["Emiliana", "Emma", "Kristen", "Tori"]
    nachnamen = ["Torini", "Stone", "Stewart", "Amos"]

    for i in range(n):
        vorname = random.choice(vornamen)
        nachname = random.choice(nachnamen)

        voller_name = f"{vorname} {nachname}"
        yield voller_name # yield unterbricht den loop und setzt beim nächsten Aufruf fort

namens_generator = namen_generieren(10)

# erster_name = next(namens_generator)
# print(erster_name)

for i in range(10):
    print(i,next(namens_generator))
    #print(i,next(namen_generieren(10)))
start = time.time()
def namen_generieren2():
    vornamen = ["Emiliana", "Emma", "Kristen", "Tori"]
    nachnamen = ["Torini", "Stone", "Stewart", "Amos"]

    while True:
        vorname = random.choice(vornamen)
        nachname = random.choice(nachnamen)

        voller_name = f"{vorname} {nachname}"
        yield voller_name # yield unterbricht den loop und setzt beim nächsten Aufruf fort

namens_generator_inf = namen_generieren2() # unendliche Anzahl der Namen
# Schreiben einer externen Datei und befüllen mit den Namen
with open("python/namensliste.txt", "w", encoding="UTF-8") as namens_datei:
    for i in range(200): 
        namens_datei.write(next(namens_generator_inf)+ "\n")

# start = time.time() # Laufzeitmessung (import time nötig)
end = time.time()
print("Laufzeit ", end - start)