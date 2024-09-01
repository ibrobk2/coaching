<?php
namespace APP\classes;
class Front{
    public function index(){
        header('Location:pages/action.php?status=index');
    }
}