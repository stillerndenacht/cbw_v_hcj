# Schreiben Sie ein Python-Programm, welches die zu zahlenden Steuern berechnet. Hierfür
# soll ein Nutzer einen Namen und sein zu versteuerndes Einkommen eingeben. Die Versteuerung
# erfolgt nach Steuerklassen, von denen es insgesamt fünf gibt:
#  Bei einem Einkommen von < 20_000 €: 0 %
#  Bei einem Einkommen zwischen 20_000 € und 35_000 €: 22 %
#  Bei einem Einkommen zwischen 35_000 € und 50_000 €: 33%
#  Einkommen zwischen 50_000 € und 100_000: 50%
#  Einkommen > 100_000 €: 60 %
# Geben Sie das zu versteuernde Einkommen auf dem Bildschirm aus. Nutzen Sie hierfür den f-
# Modus von Strings.
namex = input("\nBitte geben sie ihren Namen ein : ")
income = int(input("\nBitte geben sie das zu versteuernde Einkommen ein : "))
steuer = 0
st = 0
if income < 20000:
    steuer = steuer
elif 20000 < income < 35000:
    steuer = income * 0.35
    print(f"Herzlich Willkommen {namex}!\nIhr Steuersatz für ein Einkommen von {income} ist 35%\n Sie zahlen {steuer}€ Einkommenssteuer")

# Lösung von Benjamin ....
# income = float(input("Geben Sie Ihr Einkommen ein: "))
 
 
# if income < 20000:
#     tax = 0
# elif income <= 35000:
#     tax = 22
# elif income <= 50000:
#     tax = 33
# elif income <= 100000:
#     tax = 50
# else:
#     tax = 60
 
# print(f"Das zu versteuernde Einkommen beträgt bei einem Einkommen von {income}€ {tax}% d.h. einen Betrag von {income * (tax / 100)}€")