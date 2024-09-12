# Question 280:
# What is the expected output of the following code?

# A. abcef
# B. The program will cause a runtime exception/error
# C. acdef
# D. abdef

str = 'abcdef'
def fun(s):
    del s[2] # selbe Logik wie in Frage 271
    # Strings sind immutable, Zugriffe über den Index 
    # für Änderungen sind verboten
    # Immutabilität sorgt dafür, dass derman mit subscript-Operator []
    # keine Änderungen oder Löschung vornehmen kann.
    # subscript darf aber lesen !
    return s
    # __str__
# str überschreibt die Konvertierung in string => name shadowing
print(fun(str))

# Lösung: B