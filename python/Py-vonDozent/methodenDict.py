# verschiede methoden (siehe Tabele)

d = {"k1": "v1", "k2": "v2", "k3": "v3"}
# d.clear()
print(d)

#Dictionary selbst wird kopiert, es handel sich bei den Werten aber nach wie vor um Referenzen auf dieselben Objekte
d1 = {"key": [1,2,3]}
d2 = d1.copy()
d2["key"].append(4)
print(d1)
print(d2)

#get
d = {"k1": "v1", "k2": "v2", "k3": "v3"}
wert = d.get("k",0)
print(wert)
# kurzschreibweise für:
if "k" in d:  
    wert = d["k"]
else:
    wert = 0
print(wert)

#items 
#gibt ein iterierbares Objekt über alle Schlüssel-Wert-Paare des Dictionarys zurück
d = {"k1": "v1", "k2": "v2", "k3": "v3"}
for paar in d.items():
    print(paar)


#Die Methode keys gibt ein iterierbares Objekt über alle Schlüssel des Dictionarys zurück.
d = {"k1": "v1", "k2": "v2", "k3": "v3"}
for key in d.keys():
    print(key)

#das ganze geht auch für Values
d = {"k1": "v1", "k2": "v2", "k3": "v3"}
for value in d.values():
    print(value)

#Die Methode pop löscht das Schlüssel-Wert-Paar mit dem Schlüssel k aus dem Dictionary
#und gibt den Wert dieses Paares zurück:
d = {"k1": "v1", "k2": "v2", "k3": "v3"}
print(d.pop("k1"))
print(d)

# Die Methode popitem gibt ein willkürliches Schlüssel-Wert-Paar als Tupel zurück und
# entfernt es aus dem Dictionary.
d = {"k1": "v1", "k2": "v2", "k3": "v3"}
print(d.popitem())
print(d)

#Die Methode setdefault fügt das Schlüssel-Wert-Paar {k : x} zum Dictionary hinzu wenn der Schlüssel k nicht vorhanden ist
d = {"k1": "v1", "k2": "v2", "k3": "v3"}
d.setdefault("k2", 1337)
print(d)
d.setdefault("k5", 1337)
print(d)


#Die Methode update erweitert das Dictionary d um die Schlüssel und Werte
d = {"k1": "v1", "k2": "v2", "k3": "v3"}
d.update({"k4": "v4"})
print(d)
#Sollten beide Dictionarys über einen gleichen Schlüssel verfügen, wird dieser überschrieben 
d.update({"k1": "python"})
print(d)

#erzeugt ein neues Dictionary und verwendet dabei die Einträge des iterierbaren Objekts seq als Schlüssel
v = dict.fromkeys([1,2,3], "python")
print(v)

# value kann auch weggelassen werden
v = dict.fromkeys([1,2,3])
print(v)