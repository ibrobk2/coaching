<?php
namespace App\classes;
class Signup{

    private $name;
    private $email;
    private $password;
    private $link;
    private $sql;

    public function __construct($data = null)
    {
        if($data)
        {
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->password = md5($data['password']);
        }
    }

    public function signup()
    {
        $this->link = mysqli_connect('localhost','root','', 'ideal_db');
        if($this->link){
            $this->sql      = "INSERT INTO users(name,email,password) VALUES('$this->name','$this->email','$this->password')";
            if(mysqli_query($this->link, $this->sql)){
                return 'Sign Up successfully';
            }
            else{
                die('Query Problem...'.mysqli_error($this->link));
            }
        }
    }
}