<?php
require_once 'connection.php';

if ($_POST['submit']) {
    $word = $_POST['word'];
    $definition = $_POST['def'];

    $sql = "INSERT INTO khdict (word, def) VALUES ('$word', '$definition')";
    if ($conn->query($sql) === TRUE) {
        $message = [
            "message" => "New record created successfully",
            "status" => 200
        ];
        header('Content-Type: application/json');
        echo json_encode($message);
        $conn->close();
    } else {
        $message = [
            "message" => "Error: " . $sql . "<br>" . $conn->error,
            "status" =>  400
        ];
        header('Content-Type: application/json');
        echo json_encode($message);
        $conn->close();
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}