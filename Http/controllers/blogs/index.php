<?php

use Core\App;
use Core\Database;

$heading = 'blogs';
#35953368

$db = App::resolve(Database::class);

$query = "SELECT * from posts where user_id = :user_id";

$userId = 1;

$posts = $db->query($query,['user_id' => $userId])->findAll();

view('blogs/index.view.php', [
    'heading' =>'blogs',
    'posts'=>$posts
]);