<?php
$sName   = "localhost";       // Your database host (usually localhost)
$dbname = "Tweens_Haven";  // Your database name
$uName = "root";        // Your MySQL username (default is 'root' for XAMPP)
$pass = "";            // Your MySQL password (empty by default in XAMPP)

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$sName;dbname=$dbname", $uName, $pass);
    
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Uncomment the line below to check if the connection was successful
    // echo "Connected successfully";
} catch (PDOException $e) {
    // Handle connection errors
    echo "Connection failed: " . $e->getMessage();
    exit;
}
?>