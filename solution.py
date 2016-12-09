from password import *

password = 'VxXDcYkh3hOVUj'
password = shuffle(password, shuffled_characters, all_characters)
password = exchangep(password, reversed(pairs))
half = int(len(password)/2)
password = password[half:] + password[:half]
password = reverse(password)
print(password)