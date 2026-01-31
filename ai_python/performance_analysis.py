import pandas as pd

data = pd.read_csv("sample_dataset.csv")

avg_latency = data["latency_ms"].mean()
avg_handoff = data["handoff_ms"].mean()

print(f"Average Latency: {avg_latency:.2f} ms")
print(f"Average Handoff Time: {avg_handoff:.2f} ms")
