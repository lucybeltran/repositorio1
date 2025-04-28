<?php
/*
    Controlador de actualización de usuario
    Si el metodo es POST, se actualiza un usuario
    Si el metodo es GET, se redirige el formulario de actualización con los datos del usuario actuales
*/

require_once '../models/User.php';

if( $_SERVER['REQUEST_METHOD'] == 'POST'){
    // Actualizar un usuario
    $user = new User();
    $user->id = $_POST['id'];
    $user->name = $_POST['name'];
    $user->age = $_POST['age'];
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];
    $user->update($user->id);
    
    // Redirigir al controlador user_index.php
    header('Location: user_index.php');
    exit;
    
} else if($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Si es por GET, redirigir al formulario de actualización con los datos del usuario actuales
    $user = new User();
    $userData = $user->getFirst($_GET['id']);
    if(!$userData) {
        // Si no se encuentra el usuario mostrar un mensaje de error
        echo "Usuario con ID {$_GET['id']} no encontrado.";
        exit;
    }else{
        include '../views/user_update_form.php';
        exit;
    }

}