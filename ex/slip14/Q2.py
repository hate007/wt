import pandas as pd
from mlxtend.frequent_patterns import apriori, association_rules

transactions = [['Apple','Mango','Banana'],
                ['Mango','Banana','Cabbage','Carrots'],
                ['Mango','Banana','Carrots'],
                ['Mango','Carrots']]
print("Transactions: \n",transactions)
from mlxtend.preprocessing import TransactionEncoder

te = TransactionEncoder()
te_array = te.fit(transactions).transform(transactions)
df = pd.DataFrame(te_array, columns=te.columns_)
print("Data Set: \n",df)
freq_items = apriori(df, min_support=0.5,use_colnames = True)
print("Frequency Items: \n",freq_items)
rules = association_rules(freq_items,metric='support',min_threshold=0.5)
rules = rules.sort_values(['support','confidence'], ascending=[False,False])
print("Rules: \n",rules)
