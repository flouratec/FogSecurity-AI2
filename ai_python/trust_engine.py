import pandas as pd

data = pd.read_csv("sample_dataset.csv")

# AI-inspired trust computation
data["trust_score"] = 100 - (data["anomaly_score"] * 25)

print("Updated Trust Scores:")
print(data[["node_id","trust_score"]])
