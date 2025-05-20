<?php
// filepath: c:\Users\danie\FinanceKids\register.php
// Este archivo maneja el registro de nuevos usuarios
$host = 'localhost'; // Cambia esto si tu base de datos está en otro servidor
$dbname = 'FinanceKids';
$username = 'root'; // Cambia esto por tu usuario de MySQL
$password = ''; // Cambia esto por tu contraseña de MySQL

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>