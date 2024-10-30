
<?php include 'include/header.php';?>
<?php
$conn = mysqli_connect("localhost", "root", "", "ideal_db");

   if(isset($_POST['loginBtn'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    if($queryResut = mysqli_query($conn,$sql)){
        $data = mysqli_fetch_assoc($queryResut);
        if($data){
            session_start();
            $_SESSION['email'] = $data['email'];
            $_SESSION['name'] = $data['name'];
            header("Location:home.php");
        }
        else{
            return "Sorry .... email or password is invalid";
        }
    }
    else{
        die('Query Problem...'.mysqli_error($link));
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
                         <form action="login.php" method="POST">
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