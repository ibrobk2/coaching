<?php include 'include/header.php';?>
<?php
    if(isset($_SESSION['id'])){
        header("Location:home.php");
    }
?>
		<!-- Main section Start-->

       <div class="section"  style="background-color:#d6ebeb;">
            <div class="container py-5"  style="background-color:#d6ebeb;">
                        <h2 class="text-center text-success py-2">
                            <?php echo isset($message) ? $message : '';  ?>
                        </h2>
                <div class="row">
                    <div class="col-4"></div>                  
                    <div class="col-md-4">
                    <h2 class="text-center py-3">Select to the Sign UP </h2>
                        <div class="card">
                            <div class="row py-3">
                                <div class="col-6 py-3  px-5">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Student</button>
                                </div>
                                <!-- <div class="col-6 py-3 px-5">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Teacher</button>
                                </div> -->
                           
                           
                                <!-- <div class="col-6 py-3 px-5">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Perant</button>
                                </div> -->
                                <div class="col-6 py-3 px-5">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Admin</button>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </div>
      

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="action.php" method="POST" enctype="multipart/form-data">
                                    <div class="row px-3">
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-4">Name</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="name" placeholder="Enter name"/>
                                            </div>
                                        </div><br><br>

                                        <div class="form-group row">
                                            <label class="col-form-label col-md-4">Email</label>
                                            <div class="col-md-8">
                                                <input type="email" class="form-control" name="email" placeholder="Enter email"/>
                                            </div>
                                        </div><br><br>

                                        <div class="form-group row">
                                            <label class="col-form-label col-md-4">Password</label>
                                            <div class="col-md-8">
                                                <input type="password" class="form-control" name="password" placeholder="Enter password"/>
                                            </div>
                                        </div><br><br>
                                
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" name="signBtn" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                </div>
  
	


  
		<!-- Main section End-->


<!--Footer Section End-->


<script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    
</body>
</html>
