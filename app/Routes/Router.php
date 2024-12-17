<?php

namespace App\Routes;

use App\Controllers\HomeController;

class Router
{
    
    private $routes = [
        "/" => [
            "GET" => [
                HomeController::class,
                "index"
            ]
        ]
    ];

    public function run ($url, $request , $method)
    {

        if (strlen($url) > 1) {
            $url = rtrim($url, '/');
        }

        foreach ($this->routes as $path => $array) {
            $pattern = '#^' . preg_replace_callback('/{(\w+)}/', function ($matches) {
                return '(?P<' . $matches[1] . '>\w+)';
            }, $path) . '$#';

            if (preg_match($pattern, $url, $matches)) {

                if (array_key_exists($method, $array)) {

                    $params = [];
                    foreach ($matches as $key => $value) {
                        if (!is_int($key)) {
                            $params[$key] = $value;
                        }
                    }

                    [$currentController, $action] = $array[$method];

                    $controller = new $currentController();

                    $reflection = new \ReflectionMethod($controller, $action);

                    $paramsToPass = [];

                    foreach ($reflection->getParameters() as $param) {
                        if ($param->getName() == 'request') {
                            $paramsToPass[] = $request;
                        } elseif (isset($params[$param->getName()])) {
                            $paramsToPass[] = $params[$param->getName()];
                        }
                    }

                    return call_user_func_array([$controller, $action], $paramsToPass);
                }

                break;
                
            }
        }

        http_response_code(404);
        return view('error');
    }
}