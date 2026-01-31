<?php
require 'config.php';

$mac = $_POST['mac'] ?? '';
if(empty($mac)){
    echo json_encode(["status"=>"error","message"=>"MAC required"]);
    exit;
}

$hash = hash('sha256', $mac);
$status = "Trusted";

$stmt = $conn->prepare("INSERT INTO ant_nodes(mac_hash,status) VALUES (?,?)");
$stmt->bind_param("ss",$hash,$status);
$stmt->execute();

echo json_encode(["status"=>"success","message"=>"Node authenticated"]);
?>
