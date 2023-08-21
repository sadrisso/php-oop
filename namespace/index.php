<?php 

require "user.php";
require "student.php";

use App\User;
use School\User as U;

$user = new User;
$user->get();

$user = new U;
$user->set();