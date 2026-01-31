<?php
require 'config.php';

$session = $_POST['session_id'] ?? '';
$node = $_POST['node_id'] ?? '';

$stmt = $conn->prepare("UPDATE sessions SET node_id=? WHERE session_id=?");
$stmt->bind_param("ss",$node,$session);
$stmt->execute();

echo json_encode(["status"=>"success","message"=>"Session migrated"]);
?>
