<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>HOME</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="../assets/css/boostrap.min.css"/>
    <!-- <link rel="stylesheet" href="../assets/css/auth.css"/> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <style>
        .h-500{height:450px;
        width:100%}
        .ah-500{height:650px;
        width:100%}
        .my-caption{
            background-color: rgba(0, 0, 0, 0.5);
            bottom: 100px;
        }

        .min-h-300{
            min-height: 300px;
        } 
        .Section{
        background-image: url("admin-auth-assets/img/1.jpg");
		background-size: cover;
		background-repeat: no-repeat;
		height: 100vh;
    }      

  </style>
</head>
<body>
<section class="py-2" style="background-color: rgb(199, 191, 204);  background-image: url(../assets/img/image/img/td.png);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ">
					<div class="row">
						<div class="col-md-2 text-center">
							<a href="#"><i class="px-4"><img src="../assets/img/image/img/logo.jpg" style="height: 130px;width: 130px;border-radius: 50%;padding: 5px;"/></i></a>
						</div>
						<div class="col-md-6 text-center">
							<h1  style="color: rgba(255, 255, 255, 0.973); font-size: 50px;">Online Student Coaching Class</h1>
						</div>
						<div class="col-md-4 text-center  text-white">					
							<a href="#"><i class=""><img src="../assets/img/image/img/w.png" height="46"width="54" style="padding-left: 5px;"/></i></a>+2349068292949
						</div>
					</div>
			</div>
			
		</div>
			
	</section>
    
<?php if(isset($_SESSION['email'])) { ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="../assets/img/image/logo.jpeg" alt="" style="height: 50px; width: 60px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ml-0" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item "><a class="nav-link" href="../admin_dashboard/index.php">Admin Dashboard </a></li>
                <li class="nav-item "><a class="nav-link" href="./home.php">Add Student </a></li>
                <li class="nav-item "><a class="nav-link" href="action.php?status=manage">Manage Student </a></li>
                <li class="nav-item "><a class="nav-link" href="./teacher.php">Add Teacher </a></li>
                <li class="nav-item "><a class="nav-link" href="action.php?state=teacherManage">Manage Teacher </a></li>
                <li class="nav-item "><a class="nav-link" href="action.php?status=logout">Logout </a></li>
            </ul>
            <form class="form-inline ml-5 my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <?php  } else{ ?>
        <nav class="navbar navbar-expand-md navbar-light bg-success ">
            <a class="navbar-brand" href="#"><img src="../assets/img/image/logo.jpeg" alt="" style="height: 50px; width: 60px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse ml-0" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item "><a class="nav-link text-white" href="action.php?status=index">Home </a></li>
                    <li class="nav-item "><a class="nav-link text-white" href="about.php">About </a></li>
                    <li class="nav-item "><a class="nav-link text-white" href="contact.php">Contact </a></li>
                    <li class="nav-item "><a class="nav-link text-white" href="login.php">Login </a></li>
                    <li class="nav-item "><a class="nav-link text-white" href="signup.php">Sign Up </a></li>
                </ul>
                <form class="form-inline ml-5 my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    <?php  } ?>