<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1; 
$id = $_GET['id'] ?? 1;

$query = "select * from posts where  id = :id";

$post = $db->query($query,['id' => $id ]
    )->findOrFail();

#authorize($post['user_id'] != $currentUserId);

view('blogs/edit.view.php', [
    'heading' => 'edit blog',
    'errors'=> [],
    'post'=> $post
]);