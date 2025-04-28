<?php
/* Controlador de registro de usuario
    Si el metodo es POST, se crea un nuevo usuario
    Si el metodo es GET, se redirige el formulario de registro
*/

require_once '../models/User.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Crear un nuevo usuario
    $user = new User();
    $user->name = $_POST['name'];
    $user->age = $_POST['age'];
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];
    $user->create();
    
    // Regirigir al controlador user_index.php
    header('Location: user_index.php');
    exit;
    
} else if($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Si es por GET, redirigir al formulario de registro
    include '../views/user_create_form.php';
    exit;
}