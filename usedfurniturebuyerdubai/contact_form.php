<?php
// header('Content-Type: application/json');

// DB credentials
$host = "localhost";
$dbname = "topusedfurniturebuyerdubai";
$username = "root";
$password = "";

// DB connection
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    echo json_encode(["status" => "error", "message" => "Database connection failed."]);
    exit;
}

// Get inputs
$fname = trim($_POST['mf-listing-fname'] ?? '');
$lname = trim($_POST['mf-listing-lname'] ?? '');
$email = trim($_POST['mf-email'] ?? '');
$phone = trim($_POST['mf-telephone'] ?? '');

// Basic empty check
if (empty($fname) || empty($lname) || empty($email) || empty($phone)) {
    echo json_encode(["status" => "error", "message" => "All fields are required."]);
    exit;
}

// Insert query
$stmt = $conn->prepare("INSERT INTO contact_form (first_name, last_name, email, phone) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $fname, $lname, $email, $phone);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Form submitted successfully!"]);
} else {
    echo json_encode(["status" => "error", "message" => "Submission failed."]);
}

$stmt->close();
$conn->close();
?>
