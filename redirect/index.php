<?php

include __DIR__ . '/routes.php';
$routeHandler = new Route();
$target = $routeHandler->getTargetOfSub($_SERVER['HTTP_HOST']);// Function does check if GET parameter is set / empty

if($routeHandler->shouldAddReferer($_SERVER['HTTP_HOST'])) {
    if(str_contains($target, '?')) {
        $target .= '&'; // add & if there is a query variable in the target
    }else {
        $target .= '?'; // ? otherwise
    }
    $target .= 'r=' . urlencode($_SERVER['REQUEST_URI']);
}

header('Location: ' . $target);
die();
