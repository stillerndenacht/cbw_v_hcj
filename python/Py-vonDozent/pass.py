# Bahn und Flugzeug kann ich die realen Kosten von der Steuer absetzen
# Auto: Die ersten 20 Kilometer 0,3 € pro Kilometer von Steuer absetzen
# und ab dem 20. Kilometer sind es 0,38 €

# Realkosten des Autos berechnen
# Spritkosten berechnen (Kilometer, Verbrauch, Preis)
# Wartungskosten, Versicherungen, KfZ-Steuer etc. und Wertverlust

ticket_price = float(input("Ticketkosten für Bahn / Flugzeug: "))

# Spritkosten
entfernung = float(input("Entfernung zum Zielort (in KM): "))
verbrauch = float(input("Verbrauch: "))
benzinpreis = float(input("Benzinpreis: "))
sonstige_kosten = float(input("Weitere Kosten (pro KM): "))

summe = (verbrauch / 100) * entfernung * benzinpreis + sonstige_kosten \
    * entfernung

steuer_minderung = (entfernung-20)*0.38 + 20*0.3 if entfernung >=20 \
    else entfernung * 0.3 

kosten_steuern_vergleich = steuer_minderung - summe

print("Kosten:", summe)
print("Steuerminderung", steuer_minderung)
print("Kosten / Steuern", kosten_steuern_vergleich)

print(f"Ticketpreis {ticket_price} vs. Steuerminderung Auto: {steuer_minderung}")

# Risiko (decision matrix), Verspätungen durch Totalausfall
# Zeit (wie is die Zuverlässigkeit?)
# Stundensatz, Kann ich auf dem Weg arbeiten?

# Zufallszahlen generieren
import random
# "Würfeln" auf einem 100-seitigen Würfel, wo alle Seiten gleich wahrscheinlich
# 1, 2, ..., 99, 100
zahl = random.randint(1,100)

random.random() # 0.0 und 1.0 (exklusive!)

if zahl == 6:
    print("Hurra")
else:
    # leere Anweisung als Ersatz für { }
    # formal muss eine Anweisung hier stehen
    pass

# liste_gueltige_zahlen = [2,4,6,9]
# index = random.randint(0,3)
# liste_gueltige_zahlen[index]

# random.choice(liste_gueltige_zahlen)

# /*
# if(a==3) {
#     // Noch nicht fertig
# } 
# */
