<?php

function abort ($code = 404) {
    http_response_code($code);
    require "./views/{$code}.php";
    die();
}

function authorize($condition, $status = Response::FORBIDDEN) {
    if (! $condition) {
        abort($status);
    }
}

function dd ($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}