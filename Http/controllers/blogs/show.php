<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;
$userId = $_GET['id'] ?? 1;

$query = "select * from posts where  id = :id";

$post = $db->query($query,['id' => $userId]
    )->findOrFail();

authorize($post['user_id'] == $currentUserId);

view('blogs/show.view.php', [
        'heading' =>'blog',
        'post'=>$post  ]);