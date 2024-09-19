import random


print("random.randint(0,100)\t\t",random.randint(0,100)) # int in range
print("random.uniform(0,100)\t\t",random.uniform(0,100)) # float wert in range

print("random.randrange(0,100)\t\t",random.randrange(0,100)) #
print("random.random()\t\t\t\t",random.random()) # float wert zwischen 0 und 1
print("random.random()*100\t\t\t",random.random()*100) # float wert zwischen 0 und 1 mal 100 => 0 - 100


print("random.choice([2,5,6,7,8,9])\t",random.choice([2,5,6,7,8,9]))
print("random.choices([2,5,6,7,8,9], k=3)\t",random.choices([2,5,6,7,8,9], k=3)) # mit Zurücklegen (Dopplungen möglich)
print("random.choices([2,5,6,7,8,9],weights =[10,1,1,1,1,5], k=10)\t",random.choices([2,5,6,7,8,9], weights =[10,1,1,1,1,5], k=10))

print('random.sample(["ich","du","er","Sie","es","wir","ihr","sie"], k=5)\t', random.sample(["ich","du","er","Sie","es","wir","ihr","sie"], k=5)) # ohne Zurücklegen (keine Dopplungen)


random.seed(5,1) # setzt den Basiswert, wodurch die Zufallszahlen in jedem Durchlauf immer gleich ist
                #  das zweite Argument ist die Version des Algorithmus (optional : 1 older, 2 default new)
print(random.randint(1,100)) # 80 bei seed 5
print(random.randint(1,100)) # 33 bei seed 5
print(random.randint(1,100)) # 95 bei seed 5

random.seed(None) # löscht den seed wieder, auf default - die Systemzeit
print(random.randint(1,100)) # immer anders
print(random.randint(1,100)) # immer anders
print(random.randint(1,100)) # immer anders

x = 0
while True:
    if x == 10:
        print("Jetzt", x)
        break
    x = random.randint(1,10) # die range ist inclusive
    print("x: ", x)