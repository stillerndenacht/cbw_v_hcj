import random
# Aufgabe 10.6
print("\n -------------------- Aufgabe 10.6 --------\n")

quadratwurz = [x**(1/2) for x in range(1, 11)]
print(f"Liste der Quadratwurzeln : {quadratwurz}")

list20 = [random.randint(1,1000) for x in range(0,20)]
print(f"ursprüngliche Liste : \t{list20}")
list20even = [x for x in list20 if x % 2 == 0]
list20odd = [x for x in list20 if x % 2 != 0]
print(f"Auszug der geraden : \t{list20even}")
print(f"Auszug der ungeraden : \t{list20odd}")

worte = ["das","ist","eine","Liste","mit","zwanzig","völlig","unzufällig","also","absichtsvoll","durch","viel","Nachdenken","Grübeln","und","überaus","komplizierte","Auswahlmethoden","gewählten","Worten"]
print("\nWortliste : \n", worte)
wortlen = [len(x) for x in worte if len(x) > 3]
wortlang = [x for x in worte if len(x) > 3]
wortkurz = [x for x in worte if len(x) <= 3]
print("Liste der langen Wortlängen : \n", wortlen)
print("Liste der langen Worte : \n", wortlang)
print("Liste der kurzen Worte : \n", wortkurz)