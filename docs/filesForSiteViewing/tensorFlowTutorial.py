#Code and explanatory text taken from: https://www.tensorflow.org/text/tutorials/text_generation

import tensorflow as tf
import numpy as np
import os
#Use this for Windows:
import pathlib
import time

path_to_file = tf.keras.utils.get_file('combined.txt', 'https://raw.githubusercontent.com/rcc5418/CourtRecord/main/docs/texts/combined.txt')
encoding_language = 'utf-8' #We'll be accessing which encoding language we used late, so we need this variable

# Read, then decode for py2 compat.
try:
    # Use the local file path with 'utf-8' encoding
    text = open(path_to_file, 'r', encoding='utf-8').read()
except UnicodeDecodeError:
    # If 'utf-8' decoding fails, try a different encoding
    print("Error: 'utf-8' decoding failed. Trying 'latin-1' encoding.")
    text = open(path_to_file, 'r', encoding='latin-1').read()
    encoding_language = 'latin-1'
# length of text is the number of characters in it
print(f'Length of text: {len(text)} characters')

# Take a look at the first 250 characters in text
print(text[:250])

# The unique characters in the file
vocab = sorted(set(text))
print(f'{len(vocab)} unique characters')

#The tf.keras.layers.StringLookup layer can convert each character into a numeric ID. It just needs the text to be split into tokens first.

example_texts = ['abcdefg', 'xyz']

chars = tf.strings.unicode_split(example_texts, input_encoding='UTF-8')
chars

ids_from_chars = tf.keras.layers.StringLookup(
    vocabulary=list(vocab), mask_token=None)

#More demonstratory code
ids = ids_from_chars(chars)
ids

chars_from_ids = tf.keras.layers.StringLookup(
    vocabulary=ids_from_chars.get_vocabulary(), invert=True, mask_token=None)

#More demonstratory code. We can use this to create human-readable strings from the generated 'text'
chars = chars_from_ids(ids)
chars
tf.strings.reduce_join(chars, axis=-1).numpy()

def text_from_ids(ids):
  return tf.strings.reduce_join(chars_from_ids(ids), axis=-1)

# Given a character, or a sequence of characters, what is the most probable next character? This is the task you're
# training the model to perform. The input to the model will be a sequence of characters, and you train the model to
# predict the output—the following character at each time step.

# Next divide the text into example sequences. Each input sequence will contain seq_length characters from the text.
#
# For each input sequence, the corresponding targets contain the same length of text, except shifted one character to the right.
#
# So break the text into chunks of seq_length+1. For example, say seq_length is 4 and our text is "Hello". The input sequence would be "Hell", and the target sequence "ello".
#
# To do this first use the tf.data.Dataset.from_tensor_slices function to convert the text vector into a stream of character indices.

all_ids = ids_from_chars(tf.strings.unicode_split(text, 'UTF-8'))
all_ids

ids_dataset = tf.data.Dataset.from_tensor_slices(all_ids)

for ids in ids_dataset.take(10):
    print(chars_from_ids(ids).numpy().decode(f'{encoding_language}'))

seq_length = 100
sequences = ids_dataset.batch(seq_length+1, drop_remainder=True)

for seq in sequences.take(1):
    print(chars_from_ids(seq))
# The output of the above command is below; see how it's reading the individual characters of the string?:
# tf.Tensor(
# [b'\n' b'A' b' ' b'F' b'o' b'n' b'd' b' ' b'F' b'a' b'r' b'e' b'w' b'e'
#  b'l' b'l' b'\n' b'T' b'r' b'a' b'n' b's' b'c' b'r' b'i' b'p' b't' b'\n'
#  b'L' b'a' b'y' b't' b'o' b'n' b"'" b's' b' ' b'O' b'f' b'f' b'i' b'c'
#  b'e' b'\n' b'L' b'a' b'y' b't' b'o' b'n' b':' b'\n' b'.' b'.' b'.' b'W'
#  b'e' b'l' b'l' b' ' b't' b'h' b'e' b'n' b',' b' ' b'm' b'y' b' ' b'b'
#  b'o' b'y' b'.' b' ' b'W' b'h' b'y' b' ' b'd' b'o' b'n' b"'" b't' b' '
#  b'y' b'o' b'u' b' ' b'g' b'e' b't' b' ' b's' b'o' b'm' b'e' b' ' b't'
#  b'e' b'a' b' '], shape=(101,), dtype=string)

#This should make it easier to see what's happening:
for seq in sequences.take(5):
    print(text_from_ids(seq).numpy())
# Check out the output; it's rejoined the characters from above into longer strings!
# b"\nA Fond Farewell\nTranscript\nLayton's Office\nLayton:\n...Well then, my boy. Why don't you get some tea "
# b'ready for our guests?\nLuke:\nRight away, Professor!\nMaya:\nMan, that was one wild and crazy ride.\nPhoen'
# b'ix:\nDefinitely. Everyone back in Labyrinthia seemed as plucky as ever.\nEspella:\nWell, Mr Wright... th'
# b"at's all thanks to everyone's efforts. For the longest time, our town was shrouded behind a thick vei"
# b"l of secrecy. But now? It's absolutely thriving! And I, too...am thriving. For the first time ever, I"

# For training you'll need a dataset of (input, label) pairs. Where input and label are sequences. At each time step the
# input is the current character and the label is the next character.
# Here's a function that takes a sequence as input, duplicates, and shifts it to align the input and label for each
# timestep:
def split_input_target(sequence):
    input_text = sequence[:-1]
    target_text = sequence[1:]
    return input_text, target_text

#Demonstratory code:
split_input_target(list("Tensorflow"))
# (['T', 'e', 'n', 's', 'o', 'r', 'f', 'l', 'o'],
#  ['e', 'n', 's', 'o', 'r', 'f', 'l', 'o', 'w'])

dataset = sequences.map(split_input_target)
for input_example, target_example in dataset.take(1):
    print("Input :", text_from_ids(input_example).numpy())
    print("Target:", text_from_ids(target_example).numpy())
#A bit hard to see what's happening here; see how the target (or label) is the same as the input, but advanced
#a single character ahead?
# Input : b"\nA Fond Farewell\nTranscript\nLayton's Office\nLayton:\n...Well then, my boy. Why don't you get some tea"
# Target: b"A Fond Farewell\nTranscript\nLayton's Office\nLayton:\n...Well then, my boy. Why don't you get some tea "

#Until now, I've just been splitting the data into tiny chunks.
#Creating batches of data to train the model on is a bit harder...

# Batch size
BATCH_SIZE = 64

# Buffer size to shuffle the dataset
# (TF data is designed to work with possibly infinite sequences,
# so it doesn't attempt to shuffle the entire sequence in memory. Instead,
# it maintains a buffer in which it shuffles elements).
BUFFER_SIZE = 10000

dataset = (
    dataset
    .shuffle(BUFFER_SIZE)
    .batch(BATCH_SIZE, drop_remainder=True)
    .prefetch(tf.data.experimental.AUTOTUNE))

dataset
#Check out the stats of our dataset:
#<_PrefetchDataset element_spec=(TensorSpec(shape=(64, 100), dtype=tf.int64, name=None), TensorSpec(shape=(64, 100), dtype=tf.int64, name=None))>

#This section defines the model as a keras.Model subclass (For details see: https://www.tensorflow.org/guide/keras/custom_layers_and_models)
# This model has three layers:
#
# tf.keras.layers.Embedding: The input layer. A trainable lookup table that will map each character-ID to a vector with embedding_dim dimensions;
# tf.keras.layers.GRU: A type of RNN* with size units=rnn_units (You can also use an LSTM layer here.)
# tf.keras.layers.Dense: The output layer, with vocab_size outputs. It outputs one logit for each character in the vocabulary. These are the log-likelihood of each character according to the model.
#       * An RNN is a Recurrent Neural Network, designed to recognize patterns in data

# Length of the vocabulary in StringLookup Layer
vocab_size = len(ids_from_chars.get_vocabulary())

# The embedding dimension
embedding_dim = 256

# Number of RNN units
rnn_units = 1024

class MyModel(tf.keras.Model):
  def __init__(self, vocab_size, embedding_dim, rnn_units):
    super().__init__()
    self.embedding = tf.keras.layers.Embedding(vocab_size, embedding_dim)
    self.gru = tf.keras.layers.GRU(rnn_units,
                                   return_sequences=True,
                                   return_state=True)
    self.dense = tf.keras.layers.Dense(vocab_size)

  def call(self, inputs, states=None, return_state=False, training=False):
      x = inputs
      x = self.embedding(x, training=training)

      # Get initial state shape from the embedding layer output
      #rcc: I actually had to make a change here from tensorFlow's code. I had to initialize the states
      #as zero, if I didn't the shape wouldn't be defined yet, for some reason.
      if states is None:
          batch_size = tf.shape(x)[0]
          initial_state_shape = [batch_size, self.gru.units]
          states = tf.zeros(initial_state_shape)  # Initialize with zeros

      x, states = self.gru(x, initial_state=states, training=training)
      x = self.dense(x, training=training)

      if return_state:
          return x, states
      else:
          return x


model = MyModel(
    vocab_size=vocab_size,
    embedding_dim=embedding_dim,
    rnn_units=rnn_units)
#For each character the model looks up the embedding, runs the GRU one timestep with the embedding as input, and applies
# the dense layer to generate logits predicting the log-likelihood of the next character

for input_example_batch, target_example_batch in dataset.take(1):
    example_batch_predictions = model(input_example_batch)
    print(example_batch_predictions.shape, "# (batch_size, sequence_length, vocab_size)")

model.summary()

#To get actual predictions from the model you need to sample from the output distribution, to get actual character indices. This distribution is defined by the logits over the character vocabulary.
sampled_indices = tf.random.categorical(example_batch_predictions[0], num_samples=1)
sampled_indices = tf.squeeze(sampled_indices, axis=-1).numpy()
sampled_indices

print("Input:\n", text_from_ids(input_example_batch[0]).numpy())
print("Next Char Predictions:\n", text_from_ids(sampled_indices).numpy())
# Input:
#  b"ime with me then!? What's wrong with you!?\nEdgeworth:\nExcuse me?\nButz:\nIf anything happens to her, I"
# Next Char Predictions:
#  b'WSn\xc2\xb9\xc2\x8272\xc2\xb9y\xc2\xa2\xc2\x9a#sUZ;\xc2\x91K|q\xc3\xa2\xc2\x87\\kG$ZcX\xc2\xb1O(\xc2\xa5J+\xc2\xa0R\xc2\x87\xc2\xbc.\xc2\xbf,\xc3\x83U\xc2\xa8]\'\xc2\x99\xc2\x80\xc2\xa8fX\xc2\xb9\xc2\xa9Y\xc3\x83\xc2\xb3Dyk\xc2\xbase_;Y\xc2\x93j\xc2\x98Z7\xc3\x8b}\xc2\xb07\'L{t t&(G".\xc2\xb9\xc2\xa5#9[j@ny\xc2\xb2{/hA'

loss = tf.losses.SparseCategoricalCrossentropy(from_logits=True)

example_batch_mean_loss = loss(target_example_batch, example_batch_predictions)
print("Prediction shape: ", example_batch_predictions.shape, " # (batch_size, sequence_length, vocab_size)")
print("Mean loss:        ", example_batch_mean_loss)
# Prediction shape:  (64, 100, 148)  # (batch_size, sequence_length, vocab_size)
# Mean loss:         tf.Tensor(4.997675, shape=(), dtype=float32)

#A newly initialized model shouldn't be too sure of itself, the output logits should all have similar magnitudes. To confirm this you can check that the exponential of the mean loss is approximately equal to the vocabulary size. A much higher loss means the model is sure of its wrong answers, and is badly initialized:
tf.exp(example_batch_mean_loss).numpy()
# 148.0685 rcc: Cool, that's about the size of our vocab. That means our model isn't too cocky yet.

#Configure the training procedure using the tf.keras.Model.compile method. Use tf.keras.optimizers.Adam with default arguments and the loss function.
model.compile(optimizer='adam', loss=loss)
#Use a tf.keras.callbacks.ModelCheckpoint to ensure that checkpoints are saved during training:
#rcc: I had to modify the code here to work on a windows machine using pathlib
# Directory where the checkpoints will be saved
# checkpoint_dir = './training_checkpoints'
# Name of the checkpoint files
# checkpoint_prefix = os.path.join(checkpoint_dir, "ckpt_{epoch}")

# Directory where the checkpoints will be saved
checkpoint_dir = pathlib.Path('./training_checkpoints')
# Name of the checkpoint files
checkpoint_prefix = checkpoint_dir / "ckpt_{epoch}.weights.h5"

# Ensure the directory exists
checkpoint_dir.mkdir(parents=True, exist_ok=True)

checkpoint_callback = tf.keras.callbacks.ModelCheckpoint(
    filepath=str(checkpoint_prefix),
    save_weights_only=True)

#Let's start with 10 Epochs for reasonable training time
EPOCHS = 10
history = model.fit(dataset, epochs=EPOCHS, callbacks=[checkpoint_callback])

# Each time you call the model you pass in some text and an internal state. The model returns a prediction for the next character and its new state. Pass the prediction and state back in to continue generating text.
# The following makes a single step prediction:

class OneStep(tf.keras.Model):
  def __init__(self, model, chars_from_ids, ids_from_chars, temperature=1.0):
    super().__init__()
    self.temperature = temperature
    self.model = model
    self.chars_from_ids = chars_from_ids
    self.ids_from_chars = ids_from_chars

    # Create a mask to prevent "[UNK]" from being generated.
    skip_ids = self.ids_from_chars(['[UNK]'])[:, None]
    sparse_mask = tf.SparseTensor(
        # Put a -inf at each bad index.
        values=[-float('inf')]*len(skip_ids),
        indices=skip_ids,
        # Match the shape to the vocabulary
        dense_shape=[len(ids_from_chars.get_vocabulary())])
    self.prediction_mask = tf.sparse.to_dense(sparse_mask)

  @tf.function
  def generate_one_step(self, inputs, states=None):
    # Convert strings to token IDs.
    input_chars = tf.strings.unicode_split(inputs, 'UTF-8')
    input_ids = self.ids_from_chars(input_chars).to_tensor()

    # Run the model.
    # predicted_logits.shape is [batch, char, next_char_logits]
    predicted_logits, states = self.model(inputs=input_ids, states=states,
                                          return_state=True)
    # Only use the last prediction.
    predicted_logits = predicted_logits[:, -1, :]
    predicted_logits = predicted_logits/self.temperature
    # Apply the prediction mask: prevent "[UNK]" from being generated.
    predicted_logits = predicted_logits + self.prediction_mask

    # Sample the output logits to generate token IDs.
    predicted_ids = tf.random.categorical(predicted_logits, num_samples=1)
    predicted_ids = tf.squeeze(predicted_ids, axis=-1)

    # Convert from token ids to characters
    predicted_chars = self.chars_from_ids(predicted_ids)

    # Return the characters and model state.
    return predicted_chars, states


# Run it in a loop to generate some text
#rcc: Hopefully we see a script-like generation akin to Ace Attorney dialogue. I'm going to make the Judge
#my first speaker, as he always begins the court segments and describes the trial.
one_step_model = OneStep(model, chars_from_ids, ids_from_chars, 0.75)

start = time.time()
states = None
next_char = tf.constant(['Judge:'])
result = [next_char]

for n in range(1000):
  next_char, states = one_step_model.generate_one_step(next_char, states=states)
  result.append(next_char)

result = tf.strings.join(result)
end = time.time()
print(result[0].numpy().decode('utf-8'), '\n\n' + '_'*80)
print('\nRun time:', end - start)