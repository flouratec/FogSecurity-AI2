<?php
header("Content-Type: application/json");
$conn = new mysqli("localhost", "root", "", "fogsecurity_ai2");

$result = $conn->query("SELECT node_mac, trust_score, status FROM ant_table");
$nodes = [];

while($row = $result->fetch_assoc()){
    $nodes[] = $row;
}

echo json_encode($nodes);
?>
