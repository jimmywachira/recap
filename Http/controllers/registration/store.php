<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$errors=[];

if(!Validator::email($email)){
    $errors['email']= 'provide a valid email';
}

if(!Validator::string($password,7,21)){
    $errors['password']= 'provide a password of >7 chars';
 }

if(!empty($errors)){
   return view('registration/create.view.php',
    ['errors'=> $errors]);
    }

$query = 'SELECT * from users where email = :email';
$user = $db->query($query , ['email' =>$email])->find();

if($user){
    header('location: /login');
      exit(); 
    } 

else {
    $query= 'insert into users(email,password) values (:email, :password)';
    $db->query($query,
    ['email'=>$email, 'password'=> password_hash($password, PASSWORD_BCRYPT)]);
}

login(['email' => $email]);

header('location: /');
exit();