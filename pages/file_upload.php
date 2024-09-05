<?php include 'include/header.php';?>

<?php
    if(!isset($_SESSION['id'])){
        header("Location:login.php");
    }
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "ideal_db");

if(!$conn){
    echo "<script>
        alert('Failed to connect to DB');
    </script>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = "uploads/"; // Specify the directory where files will be stored
    $title = htmlspecialchars($_POST['title']); // Get the title from the form
    $level = htmlspecialchars($_POST['level']); // Get the level from the form
    $fileName = basename($_FILES["fileToUpload"]["name"]); // Get the uploaded file name
    $targetFilePath = $targetDir . $fileName; // Full file path
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION)); // Get file extension

    // Allowed file types
    $allowedTypes = array("jpeg", "jpg", "png", "csv", "xls", "xlsx", "doc", "docx", "pdf", "mp3", "mp4", "avi", "ppt", "pptx");

    // Check if the file type is allowed
    if (in_array($fileType, $allowedTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath)) {
            $sql = "INSERT INTO files (`id`, `file_name`, `title`, `level`) VALUES (null, '$fileName', '$title', '$level')";
            $res = mysqli_query($conn, $sql);
            echo "<h5 style='color:green; text-align:center; margin-top:5px;' >The file " . htmlspecialchars($fileName) . " has been uploaded successfully.</h5>";
             
            
        } else {
            echo "<h6 style='color:red; text-align:center;'>Sorry, there was an error uploading your file.</h6>";
        }
    } else {
        echo "<h6 style='color:red; text-align:center; margin-top:5px;'>Sorry, only JPEG, JPG, PNG, CSV, PPT,PPTX, XLS, XLSX, DOC, DOCX, MP3, MP4, and PDF files are allowed.</h6>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  
    <div class="container">
        <h2 class="text-center mt-5">File Upload Page</h2>
        <small style="font-weight:bold; text-align:center; color:red;" class="text-center d-block m-auto">*PLease fill all the fields and upload a file to upload.</small>
        <div class="card mt-4">
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" id="title" required>
                    </div>

                    <div class="form-group">
                        <label for="fileToUpload">Select file to upload:</label>
                        <input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload" required>
                    </div>

                    <div class="form-group">
                        <select name="level" id="" class="form-select form-control">
                            <option value="Select Level">Select Level</option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                            <option value="300">300</option>
                            <option value="400">400</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Upload File</button>
                </form>
            </div>
        </div>
    </div>
    <br><br><br>

    <!-- footer section -->

<?php include 'include/footer.php';?>


    <!-- Bootstrap JS (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>