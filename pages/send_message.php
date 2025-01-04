// send_message.php
<?php
// Database connection (use your existing connection code)
require_once 'your_database_connection.php'; 

$senderId = $_POST['senderId'];
$receiverId = $_POST['receiverId'];
$message = $_POST['message'];

$sql = "INSERT INTO chat (sender_id, receiver_id, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt->execute([$senderId, $receiverId, $message])) {
  echo "Message sent successfully!";
} else {
  echo "Error sending message.";
}
?>
