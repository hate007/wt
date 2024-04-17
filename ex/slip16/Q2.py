import re

from nltk.corpus import stopwords
from nltk.probability import FreqDist
from nltk.tokenize import sent_tokenize, word_tokenize

# Text to preprocess and summarize
text = "Natural language processing (NLP) is a subfield of linguistics, computer science, and artificial intelligence concerned with the interactions between computers and human languages. It involves how to program computers to process and analyze large amounts of natural language data. Challenges in natural language processing frequently involve speech recognition and natural language generation. The history of natural language understanding and natural language processing generally started in the 1950s, although work can be found from earlier periods."

# Preprocess the text to remove special characters and digits
processed_text = re.sub(r'[^a-zA-Z\s]', '', text)

# Tokenize the processed text
tokens = word_tokenize(processed_text)

# Remove stopwords
stop_words = set(stopwords.words('english'))
filtered_tokens = [word for word in tokens if word.lower() not in stop_words]

# Calculate word frequency
freq_dist = FreqDist(filtered_tokens)

# Generate summary using extractive summarization by selecting the most frequent words
summary_sentences = []
for sentence in sent_tokenize(text):
    sentence_tokens = word_tokenize(sentence)
    sentence_score = sum([freq_dist[token] for token in sentence_tokens])
    summary_sentences.append((sentence, sentence_score))

# Sort sentences by score and select the top 2 for summary
summary_sentences.sort(key=lambda x: x[1], reverse=True)
summary = ' '.join([sentence[0] for sentence in summary_sentences[:2]])

print(summary)
