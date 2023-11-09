<?php

view('session/create.view.php', [
    'errors' => $_SESSION['_flashed']['errors'] ?? []
]);