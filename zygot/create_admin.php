<?php
require 'db.php';
$username = 'admin';
$password = password_hash('admin', PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

echo "Admin user created.";
$stmt->close();
?>
