<?php
define('path', __DIR__);
require_once "vendor/autoload.php";

$vars = [
    'text' => "Hello world"
];

echo \Neoan3\Apps\Template::embraceFromFile('/templates/main.html', $vars);
