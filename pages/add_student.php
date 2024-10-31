
<?php include 'include/header.php';?>

<?php
    if(!isset($_SESSION['email'])){
        header("Location:login.php");
    }
?>

<section class="py-5" style="background-color:#545C6D;">
    <div class="container" style="background-color:#545C6D;">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Add Student Form</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="text-center text-success">
                            <?php echo isset($message) ?$message  : ''; ?>
                        </h4>
                            <form action="action.php" method="POST" enctype="multipart/form-data">

                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Student Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4">Student Class</label>
                                    <div class="col-md-8">
                                        <input type="text" name="price" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4">Student Roll</label>
                                    <div class="col-md-8">
                                        <input type="text" name="stock" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4"> About</label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Student Image </label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control-file"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4"> </label>
                                    <div class="col-md-3">
                                        <input type="submit" name="btn" class="btn btn-outline-info btn-dark" value="Creat New Student"/>
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