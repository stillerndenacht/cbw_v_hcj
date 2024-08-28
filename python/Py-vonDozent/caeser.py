text = "Ja ist den heut schon Weihnachten?"

# 74 97 ...
# Bei der Verschlüsselung und Entschlüsselung rechnet ihr mit diesen Werten
# n = 2
# 74 => 76
# 'J' => 'L'
# 97 => 99
# Verschlüsseln: Auf den Code-Point wert wird n (Schlüssel) addiert oder subtrahiert.
# Entschlüsseln: Der Code-Point wird in die entgegengesetzte Operation der Verschlüsselung umgesetzt 

# Hilfsfunktionen ord() und chr()
print(ord('J')) # 74
print(chr(74)) # 'J'

