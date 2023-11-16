 <?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;

$query = "SELECT * from posts where  id = :id";
$post = $db->query($query,['id' => $_POST['id']]
    )->findOrFail();

authorize($post['user_id'] != $currentUserId);

$errors =[];

if(!Validator::string($_POST['body'],1,1000)){
  $errors['body']= 'a body of <= 1000 chars required';
}
    
if(count($errors)){
 return  view('blogs/edit.view.php', [
        'heading' => 'edit blog',
        'errors'=> $errors,
        'post' =>$post
    ]);
}

$query= 'UPDATE posts SET `title` = :title, `body` = :body,`user_id` = :user_id WHERE id = :id';
$db->query($query,
['title'=>$_POST['title'], 'body'=>$_POST['body'],'user_id'=>$_POST['user_id'] , 'id'=> $_POST ['id']]);

header('location : /blogs');
die();