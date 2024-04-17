import matplotlib.pyplot as plt
import pandas as pd
from sklearn.linear_model import LinearRegression
from sklearn.metrics import mean_squared_error, r2_score
from sklearn.model_selection import train_test_split

# 1. Collect data
data = pd.read_csv("C:/xampp/htdocs/WT-2/WT-2_DA-slips-solved/CSV/User_Data.csv")

# 2. Preprocess data
data.dropna(inplace=True)
X = data['Age'].values.reshape(-1, 1)
Y = data['Salary'].values.reshape(-1, 1)

# 3. Split data
X_train, X_test, y_train, y_test = train_test_split(X, Y, test_size=0.2, random_state=42)

# 4. Train the model
regressor = LinearRegression()
regressor.fit(X_train, y_train)

# 5. Predict values
y_pred = regressor.predict(X_test)

# 6. Evaluate model
mse = mean_squared_error(y_test, y_pred)
r2 = r2_score(y_test, y_pred)
print("Mean squared error:", mse)
print("R squared:", r2)

# 7. Visualize results
plt.scatter(X_test, y_test, color='gray')
plt.plot(X_test, y_pred, color='red', linewidth=2)
plt.show()
