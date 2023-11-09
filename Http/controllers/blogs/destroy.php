<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$query = "select * from posts where  id = :id";

$post = $db->query($query, ['id' => $_POST['id']]
    )->findOrFail();

authorize($post['user_id'] == $currentUserId);

$query = "delete from posts where id = :id";

$db->query($query,['id' => $_POST['id']]);

header('location: /blogs');
exit();