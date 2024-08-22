import random

spieler_punkte = 0 
computer_punkte = 0
runden = 0

def bestimme_winner(Spieler_wahl, Computer_wahl):
    if Spieler_wahl == Computer_wahl:
        return "Gleich"
        
    elif Computer_wahl in Regeln[Spieler_wahl]:
        return "Spieler"
    else:
        return "Computer"

optionen = ["Stein", "Papier", "Schere", "Echse", "Spock"]

Regeln = {
    "Stein": ["Schere", "Eidechse"],
    "Papier": ["Stein", "Spock"],
    "Schere": ["Papier", "Eidechse"],
    "Echse": ["Papier", "Spock"],
    "Spock": ["Stein", "Schere"]
}

while True:
    computer_wahl = random.choice(optionen)
    spieler_wahl = input("Wähle: Stein, Papier, Schere, Echse oder Spock: ").capitalize()

    while spieler_wahl not in optionen:
        spieler_wahl = input("Ungültige Eingabe. Wähle: Stein, Papier, Schere, Echse oder Spock: ").capitalize()

    ergebnis = bestimme_winner(spieler_wahl, computer_wahl)
    print(f"Du hast {spieler_wahl} gewählt, der Computer hat {computer_wahl} gewählt.")
    print(f"Ergebnis: {ergebnis}")

    if ergebnis == "Spieler":
        spieler_punkte += 1
    elif ergebnis == "Computer":
        computer_punkte += 1
        

    runden += 1
    print(f"Aktuelle Punkte: Du: {spieler_punkte}, Computer: {computer_punkte}, Runden: {runden}")

    weiter = input("Möchtest du weiter spielen? (ja/nein): ").lower()
    if weiter != "ja":
        break

print("Spiel beendet!")
print(f"Endergebnis: Du: {spieler_punkte}, Computer: {computer_punkte}")