import random
print("\t -------Durchschnitt der Liste-------\t")

beliebig = [1,2,3,4,5,6,7,8,9,10]
beliebig2 = []
for x in range(random.randint(1,100)):
    x = random.randint(1,100)
    beliebig2.append(x)
durchschnitt = lambda x: sum(x)/len(x)

print(durchschnitt(beliebig))
print(durchschnitt(beliebig2))

print("\t -------Worte filtern/sortieren-------\t")

worte = ["das","ist","eine","Liste","mit","zwanzig","völlig","unzufällig","also","absichtsvoll","durch","viel","Nachdenken","Grübeln","und","überaus","komplizierte","Auswahlmethoden","gewählten","Worten"]

listfilter = filter(lambda x : len(x) > 5, worte)
print("list(listfilter) : ",list(listfilter))

listsorter = sorted(worte, key=lambda x: len(x))
print("listsorter : ",listsorter)

listsorter2 = sorted(worte, key=lambda x: -len(x))
print("listsorter2 : ",listsorter2)

listsorter = sorted(worte, key=lambda x: len(x))
print("list(listsorter) : ",listsorter)

print("\t -------Durchschnitt der Liste-------\t")

polynom = lambda a, b, c, x : a*(x**2) + b*x + c
print("polynom(1,2,3,2) : ", polynom(1,2,3,2))
a = random.randint(1,100)
b = random.randint(1,100)
c = random.randint(1,100)
x = random.randint(1,100)
print(f"polynom({a},{b},{c},{x}) :  {polynom(a, b, c, x)}")

listfloat = [(i/2)**2 for i in range(-20,21)]
print(listfloat)