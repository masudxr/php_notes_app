<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => './controllers/index.php',
    '/about' => './controllers/about.php',
    '/contact' => './controllers/contact.php',
    '/notes' => './controllers/notes.php',
    '/note/edit' => './controllers/notes/edit.php',
    '/note' => './controllers/note.php',
    '/register' => './controllers/register.php'
];

function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}
routeToController($uri, $routes);