import module1my as mod1
mod1.greet()

print(mod1.__dict__)
print(mod1.__name__)

def test():
    print(__name__)