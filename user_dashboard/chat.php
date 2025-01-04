<?php
// chat.php
session_start();
// include('db_connect.php'); // Include your database connection
$conn = mysqli_connect("localhost", "root", "", "ideal_db");


// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    die("Unauthorized access");
}

$user_id = $_SESSION['user_id'];

// Check if a message is being sent
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['message'])) {
    $message = trim($_POST['message']);
    $receiver_id = $_POST['receiver_id']; // Receiver ID from the front-end

    if (!empty($message)) {
        $stmt = $conn->prepare("INSERT INTO messages (sender_id, receiver_id, message, timestamp) VALUES (?, ?, ?, NOW())");
        $stmt->bind_param("iis", $user_id, $receiver_id, $message);
        $stmt->execute();
        $stmt->close();
    }
    exit;
}

// Fetch chat messages
if (isset($_GET['receiver_id'])) {
    $receiver_id = $_GET['receiver_id'];

    $stmt = $conn->prepare("
        SELECT m.*, u1.name AS sender_name, u2.name AS receiver_name
        FROM messages m
        JOIN users u1 ON m.sender_id = u1.id
        JOIN users u2 ON m.receiver_id = u2.id
        WHERE (m.sender_id = ? AND m.receiver_id = ?)
        OR (m.sender_id = ? AND m.receiver_id = ?)
        ORDER BY m.timestamp ASC
    ");
    $stmt->bind_param("iiii", $user_id, $receiver_id, $receiver_id, $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $messages = [];
    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }

    $stmt->close();
    echo json_encode($messages);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    
</head>
<body>
    <h1>Chat</h1>
        <div id="chat-container">
        <div id="chat-messages"></div>
        <textarea id="chat-input" placeholder="Type a message..."></textarea>
        <button id="send-btn">Send</button>
    </div>

  
<body>
    
</body>
</html>
