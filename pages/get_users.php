// get_users.php
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

try {
    $stmt = $conn->query("SELECT id, name FROM users"); 
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($users);
} catch(PDOException $e) {
    echo json_encode(['error' => 'Error fetching users: ' . $e->getMessage()]);
}
?>
