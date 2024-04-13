<?php
require_once 'connection.php';

$sql = "SELECT * FROM khdict ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $message = [
        "word" => $row["word"],
        "def" => $row["def"],
        "status" => 200
    ];
    header('Content-Type: application/json');
    echo json_encode($message);
} else {
    $message = [
        "message" => "No data found",
        "status" => 404
    ];
    header('Content-Type: application/json');
    echo json_encode($message);
}