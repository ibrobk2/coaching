
<?php include 'include/header.php';?>
<?php
    if(!isset($_SESSION['id'])){
        header("Location:login.php");
    }
?>
<section class="py-5" style="background-color:#545C6D;">
    <div class="container" style="background-color:#545C6D;">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Update Student Form</h2>
                    </div>
                    <div class="card-body">
                        <h4 class="text-center text-success">
                            <?php echo isset($message) ?$message  : ''; ?>
                        </h4>
                            <form action="action.php" method="POST" enctype="multipart/form-data">

                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Student Name</label>
                                    <div class="col-md-8">
                                        <input type="text"  value="<?php echo $name; ?>" name="name" class="form-control"/>
                                        <input type="hidden" value="<?php echo $id; ?>" name="id" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4">Student Class</label>
                                    <div class="col-md-8">
                                        <input type="text" value="<?php echo $price; ?>" name="price" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4">Student Roll</label>
                                    <div class="col-md-8">
                                        <input type="text" value="<?php echo $stock; ?>" name="stock" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4"> About</label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control"><?php echo $description; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Student Image </label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control-file"/>
                                        <img class="py-2" src="<?php echo $image; ?>" alt="" height="100" width="160" redious="5"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4"> </label>
                                    <div class="col-md-3 py-3">
                                        <input type="submit" name="updateBtn" class="btn btn-outline-dark btn-info text-white" value="Update Student Info"/>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include 'include/footer.php';?>