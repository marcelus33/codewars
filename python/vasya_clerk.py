"""
The new "Avengers" movie has just been released! There are a lot of people at the cinema box office standing in a huge line. Each of them has a single 100, 50 or 25 dollar bill. An "Avengers" ticket costs 25 dollars.

Vasya is currently working as a clerk. He wants to sell a ticket to every single person in this line.

Can Vasya sell a ticket to every person and give change if he initially has no money and sells the tickets strictly in the order people queue?

Return YES, if Vasya can sell a ticket to every person and give change with the bills he has at hand at that moment. Otherwise return NO.

"""

def tickets(people):
    box = []
    
    for person in people:
    
        if person == 50:
            if box.count(25) > 0:
                box.remove(25)
            else:
                return 'NO'
            
        if person == 100:
            if box.count(25) > 0 and box.count(50) > 0:
                if box.count(25) > 0: box.remove(25)
                if box.count(50) > 0: box.remove(50)
            elif box.count(25) > 2:
                box.remove(25)
                box.remove(25)
                box.remove(25)
            else:
                return 'NO'
            
        box.append(person)

    return 'YES'