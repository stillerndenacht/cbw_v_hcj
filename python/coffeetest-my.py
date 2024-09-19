def coffee():
    try:
        # bei nur Coffee wird die Exception ausgelöst
        # bei SyntaxError durch with funktioniert es nicht
        print(Coffee with Milk)
    except:
        print("Coffee is not availible in Python Modules ...")
    finally:
        print(".... We try to improve our Codes!!")
        
coffee()