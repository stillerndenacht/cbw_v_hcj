w = [7, 3, 23, 42]
x = w[1:]
y = w[1:]
z = w # Zwei Referenzen auf dieselbe Liste !
y[0] = 10
z[1] = 20 # Änderung hier sieht man auch in w
print(w) # 7,20,23,42
 