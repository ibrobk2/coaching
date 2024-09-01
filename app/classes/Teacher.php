<?php
namespace App\classes;

class Teacher
{

    private $name;
    private $phone;
    private $designation;
    private $about;
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
            $this->phone = $data['phone'];
            $this->designation = $data['designation'];
            $this->about = $data['about'];
        }
        if($file){
            $this->file = $file;
        }
    }

    protected function getImageURL(){
        $this->imageName = $this->file['image']['name'];
        $this->directory = '../assets/img/teacher/'.$this->imageName;
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
            $this->sql  = "INSERT INTO teachers(name,phone,designation,about,image) VALUES('$this->name','$this->phone','$this->designation','$this->about','$this->imgURL')";
            //$this->sql = "INSERT INTO teachers(name,phone,designation,about,image) VALUES('$this->name','$this->phone','$this->designation','$this->about','$this->imgURL')";
            if(mysqli_query($this->link, $this->sql)){
                return 'Product info create successfully';
            }
            else{
                die('Query Problem...'.mysqli_error($this->link));
            }
        }
    }

    public function getAllTeacherInfo(){
        $this->link = mysqli_connect('localhost','root','', 'ideal_db');
        if($this->link){
            $this->sql = "SELECT * FROM teachers";
            if(mysqli_query($this->link, $this->sql)){
                $this->queryResult = mysqli_query($this->link, $this->sql);
                $this->i =0;
                while($this->row = mysqli_fetch_assoc($this->queryResult)){
                   $this->data[$this->i]['id'] = $this->row['id'];
                   $this->data[$this->i]['name'] = $this->row['name'];
                   $this->data[$this->i]['phone'] = $this->row['phone'];
                   $this->data[$this->i]['designation'] = $this->row['designation'];
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
    
    public function getTeacherInfoById($id){
        $this->link = mysqli_connect('localhost','root','', 'ideal_db');
        if($this->link){
            $this->sql =  "SELECT * FROM teachers WHERE id = '$id' ";
            if(mysqli_query($this->link, $this->sql)){
                $this->queryResult = mysqli_query($this->link, $this->sql) ;
                return mysqli_fetch_assoc($this->queryResult);
            }
            else{
                die('Query Problem...'.mysqli_error($this->link));
            }
        }
    }

    public function updataTeacherInfo($teacherInfo){
        $this->link = mysqli_connect('localhost','root','', 'ideal_db');
        if($this->link){
            if (empty($this->file['image']['name'])){
                $this->imgURL   = $teacherInfo['image'];
            }
            else{
                if(file_exists($teacherInfo['image'])){
                    unlink($teacherInfo['image']);
                }
                $this->imgURL   = $this->getImageURL();
            }
            $this->sql = "UPDATE teachers SET name = '$this->name', phone = '$this->phone', designation = '$this->designation', about = '$this->about', image = '$this->imgURL'WHERE id='$teacherInfo[id]' ";

            if(mysqli_query($this->link, $this->sql)){
                session_start();
                $_SESSION['message'] = 'Teacher info Update Successfully';
                header("Location: action.php?state=teacherManage");
            }
            else{
                die('Query Problem...'.mysqli_error($this->link));
            }
        }
    }

    public function deleteTeacher($id){
        $this->link = mysqli_connect('localhost','root','', 'ideal_db');
        if($this->link){
            $this->row =$this->getTeacherInfoById($id);
            if(file_exists($this->row['image'])){
                unlink($this->row['image']);
            }
            $this->sql =  "DELETE  FROM teachers WHERE id = '$id' ";
            if(mysqli_query($this->link, $this->sql)){
                session_start();
                $_SESSION['message'] = 'Teacher info Delete Successfully';
                header("Location: action.php?state=teacherManage");
            }
            else{
                die('Query Problem...'.mysqli_error($this->link));
            }
        }
    }

}
