#!python3
# Password v1.2
# Author: Eve Ildoctor

from __future__ import print_function
try:
    input = raw_input
except NameError:
    pass

#Some list of all characters
all_characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'
#Keep this secret!
shuffled_characters = 'mRYx5Z7fcBMLa8HqghVXk26ujKw04WyprOPASndQo9bCITFiJeN1zUED3Gtsvl'
pairs = [(0,1),(0,2),(1,6),(2,3),(4,5),(0,1),(8,9),(3,4),(1,7),(6,2)]

#This function reverses a string
def reverse(string):
    result = string[::-1]
    #print(result) #todo: remove this line
    return result

#Exchange characters according to pairs
#Warning! Order of pairs is important
def exchangep(string, pairs):
    result = list(string[:])
    for pair in pairs:
        result[pair[0]], result[pair[1]] = result[pair[1]], result[pair[0]]
    return ''.join(result)

#This function changes all letters from list1 with letter in same position in list2 in the string 'string'
#Don't mixup list1 and list2! This will change the behaviour!
def shuffle(string, list1, list2):
    result = ''
    for c in string:
        position = list1.index(c)
        result = result + list2[position]
    return result

if __name__ == "__main__":
    password = input('Please enter the password:')
    #Here we mangle the password a little bit!
    #Todo: check if this algorithm is really secure? I feel it could be reversed???
    password = reverse(password)
    half = int(len(password)/2)
    password = password[half:] + password[:half]
    password = exchangep(password, pairs)
    password = shuffle(password, all_characters, shuffled_characters)
    #Check the password after mangling
    if password == 'VxXDcYkh3hOVUj':
        print('Good answer !')
    else:
        print('Not quite... try again')
