# da funktioniert bisher noch gar nix...
def reverse(x):
    y = ""
    count = len(x)+1
    for i in x:
        count -= count
        z = x[len(x)-count]
        y += z.join(y)
        print("i",i)
        return y
wort = "Wort"
print(reverse(wort))
print(wort)