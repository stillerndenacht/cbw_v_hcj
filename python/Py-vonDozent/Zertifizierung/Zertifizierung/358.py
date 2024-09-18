# QUESTION 358
# Which of the following lines of code will work flawlessly when put independently inside the add_new()
# method in order to make the snippet's output equal to [0,1, 2]? (Choose two.)
class MyClass:
    def __init__(self, size):
        self.queue = [i for i in range(size)]
    def get(self):
        return self.queue # ganze Liste geht zurück
    def get_last(self):
        return self.queue[-1] # letztes Listenelement geht zurück
    def add_new(self):
        pass
        # insert the line of the code here

Object = MyClass(2) # queue: [0,1]
Object.add_new()
print(Object.get())

# A. self.queue.append(self.get_last() + 1) # True
# B. self.queue.append(get_last() + 1) # False, 
# da kein self (globale Funktion get_last würde man suchen)
# C. self.queue.append(self.queue[-1] + 1) # True
# D. queue.append(self.get_last() + 1) # False, vor queue fehlt self
# queue ist eine Instanzvariable in MyClass und keine globale Datenstruktur.