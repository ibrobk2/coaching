
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
                        <h3>All Teachers Info</h3>
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
                                    <th>Teacher Name</th>
                                    <th>Teacher phone</th>
                                    <th>Designation</th>
                                    <th>Teacher Image</th>
                                    <th collapce="2">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <?php foreach($teachers as $teacher) { extract($teacher) ?>
                                <tr>
                                    <th><?php echo $name; ?></th>
                                    <th><?php echo $phone; ?></th>
                                    <th><?php echo $designation; ?></th>
                                    <th><img src="<?php echo $image; ?>" alt="" height="60" width="100"> </th>
                                    <th>
                                        <a href="action.php?state=edit&id=<?php echo $id; ?>" class="btn btn-outline-info">Edit</a>
                                        <a href="action.php?state=delete&id=<?php echo $id; ?>" class="btn btn-outline-danger">Delete</a>
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