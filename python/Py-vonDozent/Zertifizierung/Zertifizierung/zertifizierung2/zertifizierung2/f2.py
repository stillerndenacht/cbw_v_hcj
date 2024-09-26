class Control:
    my_ID = 1

    def say(self):
        return self.my_ID


class Button(Control):
    my_ID = 2


class Radio(Button):
    def say(self):
        return -self.my_ID


selection = Radio()
element = Control()
start = Button()


print(selection is element)
print(selection.my_ID == 2)
print(start.my_ID == -2)
print(isinstance(start, Button))
# A. print(selection is element)
# B.
# print(selection.my_ID == 2)
# C. print(start.my_ID == -2)
# D. print(isinstance (start, Button))



#Frage im chat 
end = None
print("hallo", end=None) # geht ändert aber nix 
print("hi")
