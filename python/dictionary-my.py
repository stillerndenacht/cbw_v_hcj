laender = {
    "Deutschland": "Berlin",
    "Polen": "Warschau",
    "Frankreich": "Paris",
    "Serbien": "Belgrad",
    "Albanien": "Tirana",
    "Kroatien": "Zagreb",
    "Island": "Reykjavik",
}
for value in laender.values():
    print(value)

for key, value in laender.items():
    if key == "Polen":
        print(key ,value)

new = input("Bitte geben sie einen Ländernamen ein : ")
for key, value in laender.items():
    if key == new:
        print(f"{key} : {value}")
        break   
else:
    print(f"Ihr gewünschtes Land {new} ist nicht im Dictionary")    