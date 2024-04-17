import pandas as pd

# Read the dataset
df = pd.read_csv("C:/xampp/htdocs/WT-2/WT-2_DA-slips-solved/CSV/INvideos.csv")

# Drop the columns that are not required
df = df.drop(['video_id', 'trending_date', 'channel_title', 'category_id', 'publish_time', 'tags',
              'thumbnail_link', 'comments_disabled', 'ratings_disabled', 'video_error_or_removed'], axis=1)

# Convert the datatype of 'views', 'likes', 'dislikes', and 'comment_count' to integer
df[['views', 'likes', 'dislikes', 'comment_count']] = df[['views', 'likes', 'dislikes',
                                                          'comment_count']].astype(int)

# Find the total views, likes, dislikes, and comment count
total_views = df['views'].sum()
total_likes = df['likes'].sum()
total_dislikes = df['dislikes'].sum()
total_comments = df['comment_count'].sum()

print('Total Views:', total_views)
print('Total Likes:', total_likes)
print('Total Dislikes:', total_dislikes)
print('Total Comments:', total_comments)
