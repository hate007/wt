import matplotlib.pyplot as plt
import numpy as np
import pandas as pd
from sklearn.linear_model import LinearRegression
from sklearn.model_selection import train_test_split

# Create a random dataset with 10 samples
heights = np.random.normal(170, 10, 10)
weights = np.random.normal(70, 5, 10)
# Combine the two arrays into a single dataset
dataset = pd.DataFrame({'Height': heights, 'Weight': weights})

X_train, X_test, y_train, y_test = train_test_split(dataset[['Height']], dataset['Weight'], test_size=0.3, random_state=42)
lr_model = LinearRegression()
lr_model.fit(X_train, y_train)

print('Model Coefficients:', lr_model.coef_)
y_pred = lr_model.predict(X_test)
print('Predictions:', y_pred)

plt.scatter(X_test, y_test, color='blue', label='Actual')
plt.plot(X_test, y_pred, color='red', linewidth=2, label='Predicted')
plt.title('Linear Regression Model')
plt.xlabel('Height')
plt.ylabel('Weight')
plt.legend()
plt.show()
