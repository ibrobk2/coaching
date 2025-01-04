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
?>

<!DOCTYPE html>
<html>
<head>
<title>Chat App</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f2f2f2;
}

#container {
  display: flex;
  height: 100vh;
}

#user-list {
  width: 25%;
  background-color: #fff;
  padding: 20px;
  overflow-y: auto;
}

#user-list h3 {
  margin-top: 0;
}

.user, .teacher {
  padding: 10px;
  margin-bottom: 5px;
  border-radius: 5px;
  cursor: pointer;
}

.user {
  background-color: #e9e9e9;
}

.teacher {
  background-color: #d9edf7;
}

.user.active, .teacher.active {
  background-color: #cce5ff;
}

#chat-area {
  width: 75%;
  background-color: #fff;
}

#chatbox {
  padding: 20px;
  height: calc(100vh - 100px);
  overflow-y: scroll;
}

.message {
  padding: 10px;
  margin-bottom: 10px;
  border-radius: 5px;
  max-width: 70%;
  clear: both;
}

.sender {
  background-color: #cce5ff;
  float: right;
}

.receiver {
  background-color: #f0f0f0;
  float: left;
}

#message-input {
  padding: 20px;
  border-top: 1px solid #ccc;
}

#message {
  width: calc(100% - 100px);
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-right: 10px;
}

#send {
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
</style>
</head>
<body>

<div id="container">
  <div id="user-list">
    <h3>Users</h3>
    <div id="users">
      </div>
    <h3>Teachers</h3>
    <div id="teachers">
      </div>
  </div>
  <div id="chat-area">
    <div id="chatbox">
      </div>
    <div id="message-input">
      <input type="text" id="message" placeholder="Enter message">
      <button id="send">Send</button>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
  var senderId = null; // Initially, no user is selected
  var receiverId = null; 

  // Function to load users from the database
  function loadUsers() {
    $.ajax({
      url: 'get_users.php', 
      type: 'GET',
      dataType: 'json',
      success: function(users) {
        $('#users').empty(); 
        $.each(users, function(index, user) {
          $('#users').append('<div class="user" data-user-id="' + user.id + '">' + user.name + '</div>');
        });
      }
    });
  }

  // Function to load teachers from the database
  function loadTeachers() {
    $.ajax({
      url: 'get_teachers.php', // Create this PHP file
      type: 'GET',
      dataType: 'json', 
      success: function(teachers) {
        $('#teachers').empty(); 
        $.each(teachers, function(index, teacher) {
          $('#teachers').append('<div class="teacher" data-user-id="' + teacher.id + '">' + teacher.name + '</div>');
        });
      }
    });
  }

  // Load both users and teachers when the page loads
  loadUsers();
  loadTeachers();

  // Function to load chat messages
  function loadMessages() {
    if (senderId !== null && receiverId !== null) {
      $.ajax({
        url: 'get_messages.php',
        type: 'GET',
        data: { senderId: senderId, receiverId: receiverId },
        success: function(response) {
          $('#chatbox').html(response);
        }
      });
    }
  }


  // Handle clicks on user list items
  $('#user-list').on('click', '.user, .teacher', function() {
    $('.user, .teacher').removeClass('active');
    $(this).addClass('active');
    receiverId = $(this).data('user-id'); 
    loadMessages(); 
  });


  // Send message on button click
  $('#send').click(function() {
    if (senderId !== null && receiverId !== null) { 
      var message = $('#message').val();
      $.ajax({
        url: 'send_message.php',
        type: 'POST',
        data: { 
          senderId: senderId, 
          receiverId: receiverId, 
          message: message 
        },
        success: function(response) {
          $('#message').val('');
          loadMessages();
        }
      });
    } else {
      alert("Please select a user to chat with.");
    }
  });

  // Auto-refresh messages every 3 seconds (only if a chat is active)
  setInterval(function() {
    if (receiverId !== null) { 
      loadMessages();
    }
  }, 3000);
});
</script>

</body>
</html>

