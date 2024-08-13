# das ist ein conditional also ein if else...
gender = input("\nWie möchten sie angesprochen werden? \nBitte geben sie ein \n\t'h' für Herr, \n\t'f' für Frau, \n\t'n' für keine dieser Anreden ein : ")
name = input("Danke! \n Bitte geben sie nun ihren Nachnamen ein.  ")
if gender == "h":
    print("Sehr geehrter Herr ", name, ",") 
elif gender == "d":
    print("Sehr geehrte Frau ", name, ",")
elif gender == "n":
    print("Sehr geehrter Mensch ", name, ",")
else : print("Sehr gehrter Mensch, ihre Eingabe ist ungültig.\n Wenn sie keine dieser Anreden wünschen wählen Sie 'n' ")




