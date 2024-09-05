a = 1

def greet():
    print("Hallo aus Modul 1")


print("Aus Modul 1", __name__)

if __name__ == '__main__':
    print("Dieses Programm wurde über dieses Modul gestartet.")
    greet()
else:
    print("Verwendung aus anderem Modul.")
    greet()