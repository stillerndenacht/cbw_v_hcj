# https://www.w3schools.com/python/python_string_formatting.asp

a = -10.5684
b = 10234.894
c = "i need space"
le = len(c)+10
print(f"""
Ausgabe als Prozentzahl mit float-Dezimalstellen : {a:%}
Ausgabe als Prozenzahl mit genau 2 Dezimalstellen {a:.2%}
Ausgabe mit _ als Tausender-Trenner {b:_}
Ausgabe von {int(a)} als binary {int(a):b}
Ausgabe von {int(b)} als binary {int(b):b}
""")
print(f"""
      Ausgabe der Variable mit mehr Platz drumrum:
      this sentence is spacious:{c:^20} - you see?
      Das selbe mit Berechnung auf Basis der Länge der Variable
      this sentence is spacious:{c:^{len(c)+10}} - you see?
      ganz nach rechts geschoben
      this sentence is spacious:{c:>{len(c)+10}} - you see?
      ganz nach links geschoben
      this sentence is spacious:{c:<{len(c)+10}} - you see?
      """)