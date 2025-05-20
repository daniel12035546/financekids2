<?php
// filepath: c:\Users\danie\FinanceKids\register.php
// Este archivo maneja el registro de nuevos usuarios
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Encripta la contraseña
    $role_id = 2; // Asignar el rol de "Estudiante" por defecto

    try {
        $stmt = $conn->prepare("INSERT INTO usuarios (nombre_usuario, correo, contrasena, rol_id) VALUES (:username, :email, :password, :role_id)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':role_id', $role_id);
        $stmt->execute();

        echo "Registro exitoso. <a href='login.html'>Inicia sesión aquí</a>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>