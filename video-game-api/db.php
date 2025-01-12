<?php
// Database connection (adjust with your own credentials)
$host = 'localhost';
$dbname = 'games_db';
$username = 'root';  // Your database username
$password = '';      // Your database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
