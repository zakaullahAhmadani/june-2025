<?php
header("Content-Type: application/json");

// DB Credentials
$host = "localhost";
$user = "root";
$password = "";
$dbname = "junkremovaldubai";

// Connect
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    echo json_encode(["status" => "error", "message" => "Database connection failed"]);
    exit;
}

// Check request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get POST values
    $name = $_POST["name"] ?? '';
    $email = $_POST["email"] ?? '';
    $phone = $_POST["phone"] ?? '';
    $message = $_POST["message"] ?? '';

    // Insert query
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Message sent successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Could not send message"]);
    }

    $stmt->close();
    $conn->close();
}
?>
