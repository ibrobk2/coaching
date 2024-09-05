
<?php include 'include/header.php';?>
<?php
    if(isset($_SESSION['id'])){
        if($_SESSION['id']=="Admin"){

            header("Location: ../admin_dashboard/");
        }else{

            header("Location: ../user_dashboard/");
        }
    }
?>


<section class="py-5 "  style="background-color:#d6ebeb;">
    <div class="container pt-5"  style="background-color:#d6ebeb;">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card  border-success ">
                    <div class="card-header text-center">
                        <h3>Login Form</h3>
                    </div>
                    <div class="card-body ">
                        <h5 class="text-center text-danger py-2">
                            <?php echo isset($message) ? $message : '';  ?>
                        </h5>
                         <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Password</label>
                                <div class="col-md-8">
                                    <input type="password" name="password" class="form-control" placeholder="Enter password" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-8"></label>
                                <div class="col-md-4">
                                    <input type="submit" name="loginBtn" class="btn btn-outline-primary btn-block" value="Login"/>
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