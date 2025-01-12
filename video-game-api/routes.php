<?php
require 'db.php';

// Function to fetch games from RAWG API
function fetchGamesFromRawg($apiKey, $page = 1) {
    global $rawgApiUrl;

    $url = $rawgApiUrl . '?key=' . $apiKey . '&page=' . $page;

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}

// Route to fetch games from RAWG API
function getRawgGames($apiKey) {
    $games = fetchGamesFromRawg($apiKey, 1); // Fetch the first page of games
    echo json_encode($games['results']);
}

// Route to fetch games from local database
function getLocalGames() {
    global $pdo;

    $stmt = $pdo->query('SELECT * FROM games');
    $games = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($games);
}

// More routes can go here (e.g., POST, PUT, DELETE)

