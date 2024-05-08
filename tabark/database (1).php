<?php 
// Database configuration 
$db_host = 'localhost'; // Your database host 
$db_name = 'clinic'; // Your database name 
$db_user = 'root'; // Your database username 
$db_pass = ''; // Your database password 
 
// Create a PDO connection 
try { 
    $pdo = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass); 
    // Set PDO attributes 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
} catch (PDOException $e) { 
    die("Connection failed: " . $e->getMessage()); 
} 
?>