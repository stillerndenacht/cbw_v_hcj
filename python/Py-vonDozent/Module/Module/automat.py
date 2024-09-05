kontostand = 1000

# auszahlen kann auch von anderen Modulen verwendet werden, die
# die Anzeige menue() nicht verwenden wollen
def auszahlen(betrag):
    return kontostand-betrag

def menue():
    print("1 - Einzahlen")
    print("2 - Auszahlen")
    print("X - Beenden")
    if input("Wahl: ") == "1":
        auszahlen(500)

# Programmablauf und Initialiserung, wenn ich hier starte
if __name__ == "__main__":
    menue()

print(globals())