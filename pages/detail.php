
<?php include 'include/header.php';?>

<section class="py-5" style="background-color:#d6ebeb;">
    <div class="container" style="background-color:#d6ebeb;">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <img src="<?php echo $productInfo['image']; ?>" alt="" class="w-100" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h1 class="text-center py-3">Student Name : <?php echo $productInfo['name']; ?></h2>
                    <h3 class="text-center">Student class : <?php echo $productInfo['price']; ?></h4>
                    <h3 class="text-center">Student Roll : <?php echo $productInfo['stock']; ?></h4>
                    <h5 class="py-3">Student Details :   <?php echo $productInfo['description']; ?></h6>
                </div>
                <div class="py-3 text-right" >
                <a href="action.php?status=index"><button type="button" class="btn btn-success">Return Home..</button></a>
                </div>
                 
       
            </div>
        </div>
    </div>
</section>





<?php include 'include/footer.php';?>