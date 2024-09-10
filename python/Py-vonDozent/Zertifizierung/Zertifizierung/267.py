# Question 267:
text = "Ein Text"
print(id(text))
print(text[0:3]) # slicing wie bei Listen
# Strings sind immutable !
# Strings haben andere Funktionen als Listen
# Konkatenation
# Strings sind WIE listen, aber es sind keine Listen !
# Strings haben ANDERE Methoden als Listen
text = text + " Noch ein Text"
print(id(text)) # Strings sind immutable !

# lists sind mutable
a = [ 8 ]
print(id(a))
a.append(7)
print(id(a))