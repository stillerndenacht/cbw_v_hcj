f = lambda x: x * 2
g = lambda y: y + 3
h = lambda z: z - 5

result = (lambda x, y, z: f(g(h(x))) + h(g(y)) + g(f(z)))(1, 2, 3)
# f(g(h(x))): Ergebnis h ist Eingabe g, Ergebnis g ist Eingabe von f
# -2 + 0 + 9 = 7

print(result) # 7