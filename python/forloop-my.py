# der Beginn der range (1) ist inkludiert, das Ende (11) exkludiert
for i in range(1,11):
    print(i, end=" | ")
    # Ausgabe: 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 
print()
for i in range(-2,3):
    print(i, end=" ! ")
print()
for i in range(0, 31, 3):
    print(i, end=" - ")
print()
for i in range(50, -1, -5):
    print(i, end=" : ")
    # 50 : 45 : 40 : 35 : 30 : 25 : 20 : 15 : 10 : 5 : 0 :
print("Quadratzahlen")
for i in range(0, 11):
    print(i**2, end=" : ")
    # Quadratzahlen 0 : 1 : 4 : 9 : 16 : 25 : 36 : 49 : 64 : 81 : 100 :
print("\nVariablen im Range")
a = 10
for i in range(0, a):
    print(i, end=" ? ")

# Quadratzahlen bis max 100 mit wählbarem Wert   
print("\nVariablen im Range und for/else")
a = 11
for i in range(0, 100):
    print(i**2, end=" ' ")
    if i == a:
        print("\na war kleiner 100")    
        break
else:
    print("\nEnde bei 100")

