<?php
namespace App\classes;

class Product
{

    private $name;
    private $price;
    private $stock;
    private $description;
    private $imageName;
    private $directory;
    private $file;
    private $link;
    private $sql;
    private $queryResult;
    private $row;
    private $data = [];
    private $i;
    private $temp;
    private $imgURL;

    public function __construct($data = null, $file = null)
    {
        if($data)
        {
            $this->name = $data['name'];
            $this->price = $data['price'];
            $this->stock = $data['stock'];
            $this->description = $data['description'];
        }
        if($file){
            $this->file = $file;
        }
    }

    protected function getImageURL(){
        $this->imageName = $this->file['image']['name'];
        $this->directory = '../assets/img/student/'.$this->imageName;
        move_uploaded_file($this->file['image']['tmp_name'], $this->directory);
        return $this->directory;
    }
  
    public function save()
    {
        $this->link = mysqli_connect('localhost','root','', 'ideal_db');
        if($this->link){
            if(empty($this->file['image']['name'])){
                $this->imgURL   = '';
            }
            else{
                $this->imgURL   = $this->getImageURL();
            }
            
            $this->sql      = "INSERT INTO students(name,price,stock,description,image) VALUES('$this->name','$this->price','$this->stock','$this->description','$this->imgURL')";
            if(mysqli_query($this->link, $this->sql)){
                return 'Student info create successfully';
            }
            else{
                die('Query Problem...'.mysqli_error($this->link));
            }
        }
    }

    public function getAllProductInfo(){
        $this->link = mysqli_connect('localhost','root','', 'ideal_db');
        if($this->link){
            $this->sql = "SELECT * FROM students";
            if(mysqli_query($this->link, $this->sql)){
                $this->queryResult = mysqli_query($this->link, $this->sql);
                $this->i =0;
                while($this->row = mysqli_fetch_assoc($this->queryResult)){
                   $this->data[$this->i]['id'] = $this->row['id'];
                   $this->data[$this->i]['name'] = $this->row['name'];
                   $this->data[$this->i]['price'] = $this->row['price'];
                   $this->data[$this->i]['stock'] = $this->row['stock'];
                   $this->data[$this->i]['image'] = $this->row['image'];
                   $this->i++;
                }
                return $this->data;
            }
            else{
                die('Query Problem...'.mysqli_error($this->link));
            }
        }
    }
    
    public function getProductInfoById($id){
        $this->link = mysqli_connect('localhost','root','', 'ideal_db');
        if($this->link){
            $this->sql =  "SELECT * FROM students WHERE id = '$id' ";
            if(mysqli_query($this->link, $this->sql)){
                $this->queryResult = mysqli_query($this->link, $this->sql) ;
                return mysqli_fetch_assoc($this->queryResult);
            }
            else{
                die('Query Problem...'.mysqli_error($this->link));
            }
        }
    }

    public function updataProductInfo($productInfo){
        $this->link = mysqli_connect('localhost','root','', 'ideal_db');
        if($this->link){
            if (empty($this->file['image']['name'])){
                $this->imgURL   = $productInfo['image'];
            }
            else{
                if(file_exists($productInfo['image'])){
                    unlink($productInfo['image']);
                }
                $this->imgURL   = $this->getImageURL();
            }
            $this->sql = "UPDATE students SET name = '$this->name', price = '$this->price', stock = '$this->stock', description = '$this->description', image = '$this->imgURL'WHERE id='$productInfo[id]' ";
            if(mysqli_query($this->link, $this->sql)){
                session_start();
                $_SESSION['message'] = 'Student info Update Successfully';
                header("Location: action.php?status=manage");
            }
            else{
                die('Query Problem...'.mysqli_error($this->link));
            }
        }
    }

    public function deleteProduct($id){
        $this->link = mysqli_connect('localhost','root','', 'ideal_db');
        if($this->link){
            $this->row =$this->getProductInfoById($id);
            if(file_exists($this->row['image'])){
                unlink($this->row['image']);
            }
            $this->sql =  "DELETE  FROM students WHERE id = '$id' ";
            if(mysqli_query($this->link, $this->sql)){
                session_start();
                $_SESSION['message'] = 'Product info Delete Successfully';
                header("Location: action.php?status=manage");
            }
            else{
                die('Query Problem...'.mysqli_error($this->link));
            }
        }
    }
    
    





}
