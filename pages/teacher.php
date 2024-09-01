
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
                        <h3>Add Teacher Form</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="text-center text-success">
                            <?php echo isset($message) ?$message  : ''; ?>
                        </h4>
                            <form action="action.php" method="POST" enctype="multipart/form-data">

                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Teacher Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4">Teacher Phone</label>
                                    <div class="col-md-8">
                                        <input type="text" name="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4">Designation</label>
                                    <div class="col-md-8">
                                        <input type="text" name="designation" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">About</label>
                                    <div class="col-md-8">
                                        <textarea name="about" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Teacher Image </label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control-file"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4"> </label>
                                    <div class="col-md-3">
                                        <input type="submit" name="teacherBtn" class="btn btn-outline-info btn-dark" value="Creat New Teacher"/>
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