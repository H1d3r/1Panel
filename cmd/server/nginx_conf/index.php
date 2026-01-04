<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo '<h1 style="text-align: center;">Welcome to PHP!</h1>';
echo '<h2>Version Information</h2>';

echo '<ul>';
echo '<li>PHP Version：', PHP_VERSION, '</li>';
echo '</ul>';

echo '<h2>Installed Extensions</h2>';
printExtensions();

function printExtensions()
{
    echo '<ol>';
    foreach (get_loaded_extensions() as $i => $name) {
        echo "<li>", $name, '=', phpversion($name), '</li>';
    }
    echo '</ol>';
}