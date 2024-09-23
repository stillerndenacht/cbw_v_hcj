# nicht PCAP-03, sondern professional level
# What is the output of the following code? 

def reverse(word): 
    return word[::-1] # ananab, raep separg elppa
    # ananab elppa raep separg
    # separg raep elppa ananab
    # reverse Sortierung nach Anfangsbuchstaben nach dem Drehen des Wortes
    # Dann wird die ganze Liste umgedreht 
print(sorted(['banana', 'pear', 'grapes', 'apple'], key=reverse, reverse=True)) 
# separg raep elppa ananab


# A. ['apple', 'banana', 'grapes', 'pear'] 
# B. ['grapes', 'pear', 'apple', 'banana'] <= B
# C. ['banana', 'apple', 'pear', 'grapes'] 
# D. TypeError: 'key' is an invalid keyword argument for sorted()