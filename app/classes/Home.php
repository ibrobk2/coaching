<?php
namespace App\classes;

class Home
{
    public function index()
    {
        header('Location:pages/home.php');
    }
}
