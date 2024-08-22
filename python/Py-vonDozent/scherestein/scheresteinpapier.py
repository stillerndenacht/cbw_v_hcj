# Erstelle folgendes Spiel:
# Der Computer wählt zufällig, der Spieler per Eingabe eines der folgenden Symbole aus: Schere,
# Stein, Papier, Echse oder Spock.
# Das Spiel bestimmt den Gewinner nach den folgenden Regeln:
# Stein schlägt Schere (Stein gewinnt).
# Schere schneidet Papier (Schere gewinnt).
# Papier wickelt Stein ein (Papier gewinnt).
# Stein zerquetscht Echse (Stein gewinnt).
# Echse vergiftet Spock (Echse gewinnt).
# Spock zerschmettert Schere (Spock gewinnt).
# Schere enthauptet Echse (Schere gewinnt).
# Echse frisst Papier (Echse gewinnt).
# Papier widerlegt Spock (Papier gewinnt).
# Spock verdampft Stein (Spock gewinnt).
# Es soll der Gewinner angezeigt werden. Wenn beide dasselbe Symbol auswählen, gibt es ein
# Unentschieden.
# Das Spiel sollte die Anzahl der Runden zählen. Außerdem soll gespeichert werden, wer wie
# viele Runden gewonnen hat (Computer und Spieler).
 
 
import random
 
 
# even = 0
# spieler_win = 0
# ki_win = 0
# round_played = 0
 
def regeln(even, spieler_win,ki_win, round_played):
   
    symbole = ["Schere", "Stein", "Papier", "Echse", "Spock"]
    print(f"\n\tWilkommen bei:{symbole}\n")
 
    spieler_input = input("Wähle deinen Zug\n --> Schere \n --> Stein \n --> Papier \n --> Echse \n --> Spock \n DEINE AUSWAHL: ").capitalize()
    ki_input = random.choice(symbole)
 
    print("Spieler Wahl", spieler_input)
    print("K.I. Wahl", ki_input)

    # while True:
    if spieler_input == ki_input:
        print("Unentschieden")
        round_played += 1
        even += 1
#        break
    elif spieler_input == "Stein" and ki_input == "Schere":
        print("Spieler hat gewonnen")
        round_played += 1
        spieler_win += 1
 #       break
    elif spieler_input == "Schere" and ki_input == "Papier":
        print("Spieler hat gewonnen")
        round_played += 1
        spieler_win += 1
 #       break
    elif spieler_input == "Papier" and ki_input == "Stein":
        print("Spieler hat gewonnen")
        round_played += 1
        spieler_win += 1
#        break
    elif spieler_input == "Stein" and ki_input == "Echse":
        print("Spieler hat gewonnen")
        round_played += 1
        spieler_win += 1
  #      break
    elif spieler_input == "Echse" and ki_input == "Spock":
        print("Spieler hat gewonnen")
        round_played += 1
        spieler_win += 1
  #      break
    elif spieler_input == "Spock" and ki_input == "Schere":
        print("Spieler hat gewonnen")
        round_played += 1
        spieler_win += 1
#        break
    elif spieler_input == "Schere" and ki_input == "Echse":
        print("Spieler hat gewonnen")
        round_played += 1
        spieler_win += 1
#        break
    elif spieler_input == "Echse" and ki_input == "Papier":
        print("Spieler hat gewonnen")
        round_played += 1
        spieler_win += 1
 #       break
    elif spieler_input == "Papier" and ki_input == "Spock":
        print("Spieler hat gewonnen")
        round_played += 1
        spieler_win += 1
 #       break
    elif spieler_input == "Spock" and ki_input == "Stein":
        print("Spieler hat gewonnen")
        round_played += 1
        spieler_win += 1
#        break
    else:
        print("KI hat gewonnen")
        round_played += 1
        ki_win += 1
 #       break
    return even, spieler_win, ki_win, round_played

 
# Hier werden die "neuen" Werte gespeichert -----
even, spieler_win, ki_win, round_played = regeln(0,0,0,0) 
 
while True:
    print(f"\n\tRunden gespielt: {round_played}")
    print(f"\tSpieler gewonnen: {spieler_win}")
    print(f"\tK.I. gewonnen: {ki_win}")
    print(f"\tUnentschieden: {even}\n")
   
    nochmal = input("Willst du noch mal Spielen? Ja / Nein : ")
    if nochmal == "Ja":
        even, spieler_win, ki_win, round_played = regeln(even, spieler_win, ki_win, round_played)
    elif nochmal == "Nein":
        exit()
    else:
        print ("Das War eine unzulässige eingabe !!!")