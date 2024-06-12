<?php
// router.php

// Get the requested URI
$request = trim($_SERVER['REQUEST_URI'], '/');

// Define the routes and their corresponding files
$routes = [
    '' => 'index.php',
    'english-grammar' => 'english-grammar/index.php',
    'english-grammar/interjections' => 'english-grammar/interjections.php',
    // Add more routes as needed
];

// Check if the requested URI matches a route
if (array_key_exists($request, $routes)) {
    include $routes[$request];
} else {
    // Handle 404 - Not Found
    include '404.php';
}
?> 