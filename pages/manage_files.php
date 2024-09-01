<?php
$conn = mysqli_connect("localhost", "root", "", "ideal_db");

if(!$conn){
    echo "<script>
        alert('Failed to connect to DB');
    </script>";
}



$directory = 'uploads/'; // Directory where files are stored


// Get all files in the directory
$files = array_diff(scandir($directory), array('.', '..'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Uploaded Files</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
</head>
<body>
<?php include 'include/header.php';?>
    <div class="container mt-5">
        <h2 class="text-center">Manage Files</h2>
        <?php if (empty($files)) : ?>
            <p class="text-center">No files uploaded yet.</p>
        <?php else : ?>
            <table id="fileTable" class="table table-striped table-bordered mt-4">
                <thead>
                    <tr>
                        <th>File Name</th>
                        <th>Title</th>
                        <th>Level</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $sql = "SELECT * FROM files";
                        $res = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($res)>0){
                            while($row = mysqli_fetch_assoc($res)){
                                
                          


                    
                     foreach ($files as $file) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($file); ?></td>
                            <td><?=$row['title']; ?></td>
                            <td><?=$row['level']; ?></td>
                            <td>
                                <!-- View Button -->
                                <a href="<?php echo $directory . $file; ?>" target="_blank" class="btn btn-info btn-sm">View</a>
                                <!-- Download Button -->
                                <a href="<?php echo $directory . $file; ?>" download class="btn btn-success btn-sm">Download</a>
                                <!-- Delete Button -->
                                <a href="delete_file.php?delete=<?php echo urlencode($file); ?>&id=<?php echo urlencode($row['id']);?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this file?');">Delete</a>
                            </td>
                        </tr>
                    <?php 
                    endforeach;  
                        }
                            }
                        ?>
                   
                </tbody>
            </table>
        <?php endif; ?>
    </div>
<br><br><br><br>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#fileTable').DataTable(); // Initialize DataTables
        });
    </script>

<?php include 'include/footer.php';?>
</body>
</html>
