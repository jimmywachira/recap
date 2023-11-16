<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);

$errors =[];

if(!Validator::string($_POST['body'],1,1000)){
  $errors['body']= 'a body of <= 1000 chars required';
}
    
if(!empty($errors)){
 return view('blogs/create.view.php', [
        'heading' => 'create blog',
        'errors'=> $errors
    ]);
}

$query= 'insert into posts(title, body, user_id) values (:title, :body, :user_id)';
$db->query($query,
['title'=>$_POST['title'], 'body'=>$_POST['body'],'user_id'=>$_POST['user_id']]);

header('location : /blogs');
die();