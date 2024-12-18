<?php

function view ($name, $args = [])
{
    $page = "../resources/views/{$name}.php";
    extract($args);
    
    require_once $page;
}

function vd ($content)
{
    echo "<pre>";
    var_dump($content);
    echo "</pre>";
}

function dd ($content)
{
    vd($content);
    die;
}

function loadEnv($file = '../.env') {

    if (!file_exists($file)) {
        throw new Exception("Arquivo .env não encontrado.");
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        if (strpos($line, '#') === 0 || strpos($line, ';') === 0) {
            continue;
        }

        list($key, $value) = explode('=', $line, 2);
        $key = trim($key);
        $value = trim($value, " \t\n\r\0\x0B\"'");
        
        $_ENV[$key] = $value;  // Armazena a variável em $_ENV
    }

}

function env($key, $default = null) {
    $value = $_ENV[$key];
    return $value !== false ? $value : $default;
}