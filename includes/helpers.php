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