<?php
  
$router->get('/' , 'index.php');
$router->get('/about', 'about.php');

$router->get('/blog', 'blogs/show.php');
$router->get('/blogs', 'blogs/index.php')->only('auth');
$router->delete('/blog', 'blogs/destroy.php');

$router->get('/blog/edit', 'blogs/edit.php');
$router->patch('/blog', 'blogs/update.php');

$router->get('/blog/create', 'blogs/create.php');
$router->post('/blogs', 'blogs/store.php');

$router->post('/register', 'registration/store.php')->only('guest');
$router->get('/register', 'registration/create.php')->only('guest');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');