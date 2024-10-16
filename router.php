<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/'=> 'controllers/home.php',
    '/about'=> 'controllers/about.php',
    '/contacts'=> 'controllers/contacts.php',
];

function routeToController( $uri, $routes){
    if (array_key_exists($uri, $routes)) {
        require $routes[ $uri ];
    } else {
        abort();
    }
}

function abort( $code = 404) {
    http_response_code( 404 );

    require "views/http_codes/{$code}.php";

    die();
}

routeToController($uri,$routes);