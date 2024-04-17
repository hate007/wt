import re

from nltk.tokenize import sent_tokenize
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity

# Text to summarize
text = "Hello all, #Welcome to @Python Programming Academy. Python Programming Academy is a nice platform to learn new programming skills. It is difficult to get enrolled in this Academy."

# Preprocess the text to remove special characters and digits
preprocessed_text = re.sub(r'[^a-zA-Z\s]', '', text)

# Tokenize the preprocessed text into sentences
sentences = sent_tokenize(preprocessed_text)

# Calculate the importance score of each sentence using TF-IDF
vectorizer = TfidfVectorizer()
tfidf_matrix = vectorizer.fit_transform(sentences)
cosine_similarity_matrix = cosine_similarity(tfidf_matrix)

# Select top N sentences based on their importance score
N = 2
top_sentences = sorted(range(len(cosine_similarity_matrix[-1])), key=lambda i: cosine_similarity_matrix[-1][i])

# Concatenate the top sentences to form the summary
summary = ''
for i in top_sentences[:N]:
    summary += sentences[i] + ' '

print(summary)
