<?php
$host = "localhost";
$dbname = "german_products_db";
$username = "root";
$password = "";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password
    );

    echo "Database connected successfully!";

} catch (PDOException $e) {
    die("Database connection failed!");
}
?>
