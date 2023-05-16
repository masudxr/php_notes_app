<?php

$router->get('/', 'index.php');
// $router->get('/about', 'controllers/about.php');
// $router->get('/contact', 'controllers/contact.php');

// $router->get('/notes', 'controllers/notes.php');
// $router->get('/note', 'controllers/note.php');
$router->delete('/note', 'destroy.php');

$router->get('/note/edit', 'controllers/notes/edit.php');
// $router->get('/notes/create', 'controllers/notes/new.note.php');

// $router->post('/notes', 'controllers/notes/store.php');



