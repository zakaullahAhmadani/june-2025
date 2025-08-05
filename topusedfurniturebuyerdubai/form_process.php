<?php
header('Content-Type: application/json');

$host = "localhost";
$dbname = "topusedfurniturebuyerdubai";
$username = "root";
$password = "";

// Connect
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(["status" => "error", "message" => "Connection failed"]);
    exit;
}

// Get POST values
$name = trim($_POST['mf-listing-fname'] ?? '');
$phone = trim($_POST['mf-telephone'] ?? '');

// Validate
if (empty($name) || empty($phone)) {
    echo json_encode(["status" => "error", "message" => "Please fill in all fields."]);
    exit;
}

// Insert into database
$stmt = $conn->prepare("INSERT INTO form_requests (name, phone) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $phone);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Form submitted successfully!"]);
} else {
    echo json_encode(["status" => "error", "message" => "Failed to submit form."]);
}

$stmt->close();
$conn->close();
?>
