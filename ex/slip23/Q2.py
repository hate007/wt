import re

# Sample text paragraph
text = "Hello, #world123! This is a sample text paragraph. It contains special characters and digits."

# Remove special characters and digits
processed_text = re.sub(r'[^a-zA-Z\s]', '', text)

print(processed_text)
