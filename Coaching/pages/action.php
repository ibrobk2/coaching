<?php
require_once'../vendor/autoload.php';
use App\classes\Product;
use App\classes\Auth;
use App\classes\Signup;
use App\classes\Teacher;

if(isset($_POST['btn'])){
    $product = new Product($_POST, $_FILES);
    $message = $product->save();
    include 'home.php';
}
else if(isset($_POST['teacherBtn'])){
    $teacher = new Teacher($_POST, $_FILES);
    $message = $teacher->save();
    include 'teacher.php';
}


else if(isset($_GET['status'])){
    if($_GET['status']=='manage'){
        $product = new Product();
        $products = $product->getAllProductInfo();
        include 'manage.php';
    }
    else if($_GET['status'] == 'edit'){
        $id = $_GET['id']; 
        $product = new Product();
        $productInfo = $product->getProductInfoById($id);
        extract($productInfo);
        include 'edit.php';
    }
    
    else if($_GET['status'] == 'delete'){
        $id = $_GET['id'];
        $product = new Product();
        $product->deleteProduct($id); 
        include 'manage.php';
    }

    else if($_GET['status'] == 'index'){
        $product = new Product();
        $teacher = new Teacher();
        $products = $product->getAllProductInfo();
        $teachers = $teacher->getAllTeacherInfo();
        include 'index.php';
    }

    else if($_GET['status'] == 'detail'){
        $id = $_GET['id'];
        $product = new Product();
        $productInfo = $product->getProductInfoById($id);
        include 'detail.php';
    }
    else if($_GET['status'] == 'logout'){
        $auth    = new Auth($_POST);
        $auth->logout();
    }
   
}

/**teachter */

else if(isset($_GET['state'])){
    if($_GET['state']=='teacherManage'){
        $teacher = new Teacher();
        $teachers = $teacher->getAllTeacherInfo();
        include 'teacherManage.php';
    }
    else if($_GET['state'] == 'edit'){
        $id = $_GET['id']; 
        $teacher = new Teacher();
        $teacherInfo = $teacher->getTeacherInfoById($id);
        extract($teacherInfo);
        include 'teacherEdit.php';
    }
    else if($_GET['state'] == 'delete'){
        $id = $_GET['id'];
        $teacher = new Teacher();
        $teacher->deleteTeacher($id); 
        include 'teacherManage.php';
    }

}

else if(isset($_POST['updateTeacBtn'])){
    $id = $_POST['id'];
    $teacher        = new Teacher($_POST, $_FILES);
    $teacherInfo    = $teacher->getTeacherInfoById($id);
    $teacher->updataTeacherInfo($teacherInfo);
}



else if(isset($_POST['loginBtn'])){
    $auth    = new Auth($_POST);
    $message = $auth->login();
    include 'login.php';

}

else if(isset($_POST['signBtn'])){
    $signup    = new Signup($_POST);
    $message = $signup->signup();
    include 'signup.php';

}
else if($_GET['status'] == 'calculator'){
    include 'calculator.php';
}
