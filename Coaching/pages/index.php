
<?php include 'include/header.php';?>



<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="2000" >
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../assets/img/11.png"  class="d-block w-100 h-500" alt="...">
            <div class="carousel-caption my-caption">
                <h1>This is our Ideal Coaching Center</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit quisquam exercitationem, minus qui quasi dolore totam deserunt? Ut adipisci odio facilis totam iusto rem voluptate tempora suscipit libero, sit neque!</p>
                <a href="" class="btn btn-success">Read More..</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../assets/img/4.jpg" class="d-block w-100 h-500" alt="...">
            <div class="carousel-caption my-caption">
                <h1>This is our Ideal Coaching Center</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit quisquam exercitationem, minus qui quasi dolore totam deserunt? Ut adipisci odio facilis totam iusto rem voluptate tempora suscipit libero, sit neque!</p>
                <a href="" class="btn btn-success">Read More..</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../assets/img/3.jpg" class="d-block w-100 h-500" alt="...">
            <div class="carousel-caption my-caption">
                <h1>This is our Ideal Coaching Center</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit quisquam exercitationem, minus qui quasi dolore totam deserunt? Ut adipisci odio facilis totam iusto rem voluptate tempora suscipit libero, sit neque!</p>
                <a href="" class="btn btn-success">Read More..</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../assets/img/5.jpg" class="d-block w-100 h-500" alt="...">
            <div class="carousel-caption my-caption">
                <h1>This is our Ideal Coaching Center</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit quisquam exercitationem, minus qui quasi dolore totam deserunt? Ut adipisci odio facilis totam iusto rem voluptate tempora suscipit libero, sit neque!</p>
                <a href="" class="btn btn-success">Read More..</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../assets/img/11.jpeg" class="d-block w-100 h-500" alt="...">
            <div class="carousel-caption my-caption">
                <h1>This is our Ideal Coaching Center</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit quisquam exercitationem, minus qui quasi dolore totam deserunt? Ut adipisci odio facilis totam iusto rem voluptate tempora suscipit libero, sit neque!</p>
                <a href="" class="btn btn-success">Read More..</a>
            </div>
        </div>
    </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <a href="#carouselExampleSlidesOnly" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>  
                </a>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <a href="#carouselExampleSlidesOnly" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>  
                </a>
            </button>

</div>

<div class="py-2"></div>
<!-- <section class="py-5" style="">
    <div class="container">  
    <h1 class="text-center  py-5">This is Protfolio Gellary</h1>
    <hr/>
        <div class="row ">
            <div class="col-md-6">
                <div class="card border-0">
                    <img src="../assets/img/Gellary/1.jpeg" class="card-img-top" alt=""/>    
                </div>   
            </div>
            <div class="col-md-6">
                <div class="card border-0">
                    <img src="../assets/img/Gellary/2.jpeg" class="card-img-top" alt=""/>    
                </div>   
            </div>
        </div>
        <div class="row ">
            <div class="col-md-6">
                <div class="card border-0">
                    <img src="../assets/img/Gellary/3.jpeg" class="card-img-top" alt=""/>    
                </div>   
            </div>
            <div class="col-md-6">
                <div class="card border-0">
                    <img src="../assets/img/Gellary/4.jpeg" class="card-img-top" alt=""/>    
                </div>   
            </div>
        </div>
    </div>
</section> -->





<!-- <section class="py-5" style="background-color:#d6ebeb;">
    <div class="container" style="background-color:#d6ebeb;">
    <h1 class="text-center text-primary py-3">This is Students Portal</h1>
    <hr/>
        <div class="row">
            <?php foreach ($products as $product) { extract($product) ?>
                <div class="col-md-4 mb-4 py-2">
                    <div class="card border-0">
                        <img src="<?php echo $image; ?>" alt="" class="card-img-top" style="height:350px;"  />
                        <div class="card-body">
                            <h3> <?php echo $name; ?></h3>
                            <h4> Class: <?php echo $price; ?></h4>
                            <h4> Roll NO:  <?php echo $stock; ?></h4>
                            <a href="action.php?status=detail&id=<?php echo $id; ?>"  class="btn btn-outline-info"> Detail</a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</section> -->






<section class="py-5" style="">
    <div class="container" style="">
    <!-- <h1 class="text-center text-primary py-3">This is Teacher Portal</h1> -->
    <hr/>
        <!-- <div class="row">
            <?php foreach ($teachers as $teacher) { extract($teacher) ?>
                <div class="col-md-4 mb-4 py-2">
                    <div class="card border-0">
                        <img src="<?php echo $image; ?>" alt="" class="card-img-top" style="height:350px;"  />
                        <div class="card-body">
                            <h3> <?php echo $name; ?></h3>
                            <h4> Mobile: <?php echo $phone; ?></h4>
                            <h4> Designation:  <?php echo $designation; ?></h4>
                            <a href="#"  class="btn btn-outline-info"> Detail</a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div> -->
<!-- </section> -->


<!-- <section class="py-5">
    <div class="container">    
    <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card">
                        <img src="../assets/img/5.jpg" class="card-img-top" alt=""/>
                        <div class="card-body">
                            <h3 class="card-title text-center">Progress</h3>
                            <p class="card-text text-justify">Simple text Simple text Simple text Simple text Simple text Simple text  </p>
                        </div>
                        <div class="card-footer">
                            <a href="" class="btn btn-success float-right">Read More...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->








<?php include 'include/footer.php';?>