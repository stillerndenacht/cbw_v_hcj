# QUESTION 408
# Which of the following lines of code will work flawlessly when put independently
# inside the dup() method in order to make the snippet's output equal to [0, 1, 1] ? 
# (Select two answers)

class MyClass:
    def __init__(self, initial):
        self.store = initial
    def put(self, new):
        self.store.append(new)
    def get(self):
        return self.store
    def dup(self):
        pass
        # Insert the line of code here
Object = MyClass([0])
Object.put(1)
Object.dup()
print(Object.get())
# A. put(self.store[1])
# B. self.put(self.store[1])
# C. self.put(self.get()[-1])
# D. self.put(store[1])

# Lösung: BC, da self-Referenz fehlt, um Objektbindung herzustellen. 