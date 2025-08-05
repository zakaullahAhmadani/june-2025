<?php
header("Content-Type: application/json");

// Database credentials
$host = "localhost";
$user = "root";
$password = "";
$dbname = "junkremovaldubai";

// Connect to MySQL
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(["status" => "error", "message" => "Database connection failed: " . $conn->connect_error]);
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["email"])) {
        $email = $_POST["email"];

        // Prepared statement to insert email
        $stmt = $conn->prepare("INSERT INTO newsletter_emails (email) VALUES (?)");
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Email saved successfully"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Error saving email: " . $stmt->error]);
        }

        $stmt->close();
    } else {
        echo json_encode(["status" => "error", "message" => "Email field is missing"]);
    }

    $conn->close();
}
?>
