import nltk
from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize

# Sample text paragraph
text = "Hello all, Welcome to Python Programming Academy. Python Programming Academy is a nice platform to learn new programming skills. It is difficult to get enrolled in this Academy."

# Tokenize the text paragraph
words = word_tokenize(text)

# Define stopwords
stop_words = set(stopwords.words('english'))

# Remove stopwords
filtered_words = [word for word in words if word.casefold() not in stop_words]

# Join filtered words to form a sentence
filtered_sentence = ' '.join(filtered_words)

print(filtered_sentence)
