import matplotlib.pyplot as plt
import pandas as pd
from textblob import TextBlob
from wordcloud import STOPWORDS, WordCloud

# Load the dataset
df = pd.read_csv("C:/xampp/htdocs/WT-2/WT-2_DA-slips-solved/CSV/movie_review.csv")

# Add a column for sentiment analysis using TextBlob
df['Sentiment'] = df['text'].apply(lambda x: TextBlob(str(x)).sentiment.polarity)

# Create a new dataframe for positive reviews only
pos_df = df[df['Sentiment'] > 0.2]

# Create a word cloud for positive reviews
wordcloud = WordCloud(width=500, height=500, background_color='white', stopwords=STOPWORDS, min_font_size=8).generate(' '.join(pos_df['text']))

# Plot the word cloud
plt.figure(figsize=(8, 8), facecolor=None)
plt.imshow(wordcloud)
plt.axis("off")
plt.tight_layout(pad=0)
plt.show()
