<?php
require_once "user.php";
require_once "student.php";
use School\User as User;
use App\User;
$user = new App\User;
$user->get();
$user2 = new Students;
$user2->get();
PHP_EOL;
// $student = new Student();
// $student->Display();