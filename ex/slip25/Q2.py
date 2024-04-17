import pandas as pd
from nltk.tokenize import word_tokenize
from nltk.sentiment.vader import SentimentIntensityAnalyzer


df = pd.read_csv("covid_2021_1.csv")

df.dropna(inplace=True)
df.reset_index(drop=True, inplace=True)


df['tokenized_comments'] = df['comments'].apply(lambda x: word_tokenize(x))


sid = SentimentIntensityAnalyzer()
df['sentiment'] = df['comments'].apply(lambda x: sid.polarity_scores(x))

def classify_sentiment(score):
    if score >= 0.05:
        return 'Positive'
    elif score <= -0.05:
        return 'Negative'
    else:
        return 'Neutral'

df['sentiment_class'] = df['sentiment'].apply(lambda x: classify_sentiment(x['compound']))

sentiment_counts = df['sentiment_class'].value_counts(normalize=True) * 100

print("Percentage of Positive Comments:", sentiment_counts['Positive'])
print("Percentage of Negative Comments:", sentiment_counts['Negative'])
print("Percentage of Neutral Comments:", sentiment_counts['Neutral'])
