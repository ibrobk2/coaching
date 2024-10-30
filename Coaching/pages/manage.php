
<?php include 'include/header.php';?>
<?php
    if(!isset($_SESSION['id'])){
        header("Location:login.php");
    }
?>

<section class="py-5" style="background-color:#545C6D;">
    <div class="container" style="background-color:#545C6D;">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>All Students Info</h3>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center text-success">
                            <?php  
                                if(isset($_SESSION['message'])){
                                    echo $_SESSION['message'];
                                    unset($_SESSION['message']);
                                }   
                            ?>
                        </h3>

                        <h3 class="text-center text-success mb-3"><?php  echo isset($_SESSION['message']) ? $_SESSION['message'] : '';  ?></h3>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Student Class</th>
                                    <th>Student Roll</th>
                                    <th>Student Image</th>
                                    <th collapce="2">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <?php foreach($products as $product) { extract($product) ?>
                                <tr>
                                    <th><?php echo $name; ?></th>
                                    <th><?php echo $price; ?></th>
                                    <th><?php echo $stock; ?></th>
                                    <th><img src="<?php echo $image; ?>" alt="" height="60" width="100"> </th>
                                    <th>
                                        <a href="action.php?status=edit&id=<?php echo $id; ?>" class="btn btn-outline-info">Edit</a>
                                        <a href="action.php?status=delete&id=<?php echo $id; ?>" class="btn btn-outline-danger">Delete</a>
                                    </th>
                                </tr>
                                <?php } ?>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include 'include/footer.php';?>