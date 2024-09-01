<?php
require_once './vendor/autoload.php';
include("app/classes/Config.php");
use App\classes\Front;

$home = new Front();
$home->index();