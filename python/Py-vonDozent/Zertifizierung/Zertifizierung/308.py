# QUESTION 308
# If you want to transform a string into a list of words, what invocation 
# would you use? (Choose two.)
# Expected output:
# The, Catcher, in, the, Rye,
# Code:

s = "The Catcher in the Rye"
l = # s.split() put a proper invocation here
for w in l:
    print(w, end=', ') # outputs: The, Catcher, in, the, Rye,

# A. s.split() # split arbeitet mit einem Default-Parameter
# B. split(s, ' ')
# C. s.split(' ')
# D. split(s)

# Lösung: A, C # split ist keine builtin-Funktion, sondern eine Methode von String
# builtin-Funktion: map, filter, sorted, ord, chr, isinstance, ...

# Weil split keine Funktion, sondern eine Methode ist, 
# können wir B und D ausschließen.
# split wird immer im Kontext von einem string-Objekt aufgerufen. 