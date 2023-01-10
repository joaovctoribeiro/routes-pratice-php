<?php

function load(string $controller, string $action) 
{
    /**
     * Verifica se o controller existe
     * 
     * Check if the controller exists
     */

    try {

        $controllerNamespace = "app\\controllers\\{$controller}";

        if(!class_exists($controllerNamespace)) {
            throw new Exception("O controller {$controller} não existe.");
        }
        
        $controllerInstance = new $controllerNamespace();

        if(!method_exists($controllerInstance, $action)) {
            throw new Exception("O método {$action} não existe no controller {$controller}.");
        }

        $controllerInstance->$action((object)$_REQUEST);

    } catch(Exception $e) {
        echo $e->getMessage();
    }
}

/**
 * Configurando as rotas que vão existir.
 * 
 * Configuring the routes that will exist.
*/

$router = [
    'GET' => [
        '/' => fn() => load('HomeController', 'index'),
        '/contact' => fn() => load('ContactController', 'index'),
        '/about' => fn() => load('AboutController', 'about')
    ],

    'POST' => [
        '/contact' => fn() => load('ContactController', 'store')
    ]
];