wortliste = ["apfel", "Erdbeere", "banane", "orange", "Kiwi", "Himbeere"]
 
# Aufgabe: Mit einer list comprehension alle Worte aufnehmen, die den ersten
# Buchstaben groß geschrieben haben
 
große_worte = [x for x in wortliste if x[0].isupper()]
print(große_worte)
# neue Liste = [was wird mit dem Auszug X gemacht FOR X (Variable für Auszug) IN welcher Liste(Variable) IF Bedingung]

# neueliste = [make_with x (and store in neueliste) for x in alteliste if this for x is True]