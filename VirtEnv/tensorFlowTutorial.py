import tensorflow as tf
import numpy as np
import os
import time

path_to_file = ('corpus-txt/combined.txt')

# Read, then decode for py2 compat.
try:
    # Use the local file path with 'utf-8' encoding
    text = open(path_to_file, 'r', encoding='utf-8').read()
except UnicodeDecodeError:
    # If 'utf-8' decoding fails, try a different encoding
    print("Error: 'utf-8' decoding failed. Trying 'latin-1' encoding.")
    text = open(path_to_file, 'r', encoding='latin-1').read()
# length of text is the number of characters in it
print(f'Length of text: {len(text)} characters')