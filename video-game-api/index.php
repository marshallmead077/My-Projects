<?php
require 'routes.php';

$method = $_SERVER['REQUEST_METHOD'];
$endpoint = $_GET['endpoint'] ?? '';

header('Content-Type: application/json');

// Your API routes
if ($method === 'GET') {
    if ($endpoint === 'rawg_games') {
        $rawgApiKey = 'your_api_key_here'; // Replace with your RAWG API key
        getRawgGames($rawgApiKey); // Fetch and return games from RAWG API
    } elseif ($endpoint === 'local_games') {
        getLocalGames(); // Fetch and return games from the local database
    } else {
        http_response_code(404);
        echo json_encode(['error' => 'Endpoint not found']);
    }
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Invalid method or endpoint']);
}
