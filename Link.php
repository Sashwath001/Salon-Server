<?php
// test_connection.php
$dsn = 'mysql:host=localhost;dbname=final;port=3306'; // Use port 3306 for MySQL
$dbusername = 'root';
$dbpassword = '';

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully to the database!";
    print_r($pdo);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>