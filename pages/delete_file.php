<?php

$conn = mysqli_connect("localhost", "root", "", "ideal_db");

$directory = 'uploads/'; // Directory where files are stored
// Handle file deletion
if (isset($_GET['delete'])) {
    $fileToDelete = $directory . basename($_GET['delete']);
    if (file_exists($fileToDelete)) {
                

        unlink($fileToDelete);
        $id = $_GET['id'];
        $sql = "DELETE FROM files WHERE id=$id";
        $res = mysqli_query($conn, $sql);

        if($res){

            header("Location: manage_files.php");
        }
        // echo "<div class='alert alert-success'>File deleted successfully.</div>";
    } else {
        echo "<div class='alert alert-danger'>File not found.</div>";
    }
}


?>