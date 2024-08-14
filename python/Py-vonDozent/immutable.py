lname = input("Wie ist Ihr Nachname?: ")
gender = input("Geben sie bitte ihr Pronomen ein (Er, Sie, Keins): ")
# gender = input("Geben sie bitte ihr Pronomen ein (Er, Sie, Keins): ").lower()
print(id(gender))
# Hier brauchen wir eine Zuweisung, weil Strings immutabel (unveränderlich) sind
# Diese Kopie muss dann neu zugewiesen werden, damit sie einen Effekt hat
# gender verwendet den Bezeichner aus Zeile 2, ist aber EIN GANZ NEUER Speicherplatz
# Das alte gender wird nun von dem System 
gender = gender.lower()
print(id(gender), gender)

