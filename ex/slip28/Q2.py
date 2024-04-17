import matplotlib.pyplot as plt
import numpy as np
import pandas as pd
from sklearn import metrics
from sklearn.linear_model import LinearRegression
from sklearn.model_selection import train_test_split

# Load the car dataset
data = {'Mileage': [10, 20, 30, 40, 50],
        'Price': [24, 19, 17, 13, 10]
        }

# Convert the data dictionary to a Pandas DataFrame
df = pd.DataFrame(data)

# Select relevant features (Mileage) and the target variable (Price)
X = df[['Mileage']].values
y = df['Price'].values

# Split the data into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.25, random_state=0)

# Build a linear regression model
linear_regression = LinearRegression()
linear_regression.fit(X_train, y_train)

# Make predictions on the testing set
y_pred = linear_regression.predict(X_test)

# Print the model performance metrics
print('Mean Absolute Error:', metrics.mean_absolute_error(y_test, y_pred))
print('Mean Squared Error:', metrics.mean_squared_error(y_test, y_pred))
print('Root Mean Squared Error:', np.sqrt(metrics.mean_squared_error(y_test, y_pred)))

# Plot the regression line
plt.scatter(X_test, y_test, color='black')
plt.plot(X_test, y_pred, color='blue', linewidth=3)
plt.title('Linear Regression - Car Dataset')
plt.xlabel('Mileage')
plt.ylabel('Price')
plt.show()
