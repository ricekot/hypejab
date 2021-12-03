<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app->get(
    '/examples/jsp/index.html',
    function (Request $request, Response $response) {
        require __DIR__ . '/../login/checkSession.php';
        $html = file_get_contents(__DIR__ . "/../resources/JSP/index.html");
        $response->getBody()->write($html);
        return $response->withHeader("content-type", "text/html")
                        ->withStatus(200);
    }
);
