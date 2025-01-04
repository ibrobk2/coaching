// get_messages.php
<?php

// database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ideal_db";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


$senderId = $_GET['senderId'];
$receiverId = $_GET['receiverId'];

$sql = "SELECT * FROM chat WHERE (sender_id = ? AND receiver_id = ?) OR (sender_id = ? AND receiver_id = ?) ORDER BY timestamp ASC";
$stmt = $conn->prepare($sql);
$stmt->execute([$senderId, $receiverId, $receiverId, $senderId]);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $senderClass = ($row['sender_id'] == $senderId) ? 'sender' : 'receiver';
  echo "<p class='$senderClass'>{$row['message']}</p>";
}
?>
