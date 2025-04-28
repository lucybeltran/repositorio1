<?php
/*
    Controlador de eliminación de usuario
    Si el metodo es POST, se elimina un usuario
    Si el metodo es GET, se muestra una vista de confirmación de eliminación
*/

require_once '../models/User.php';

if( $_SERVER['REQUEST_METHOD'] == 'POST'){
    // Eliminar un usuario
    $user = new User();
    $user->id = $_POST['id'];
    $user->delete($user->id);
    
    // Regirigir al controlador user_index.php
    header('Location: user_index.php');
    exit;
    
} else if($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Si es por GET, redirigir al formulario de eliminación con los datos del usuario actuales
    $user = new User();
    $userData = $user->getFirst($_GET['id']);
    if(!$userData) {
        // Si no se encuentra el usuario mostrar un mensaje de error
        echo "Usuario con ID {$_GET['id']} no encontrado.";
        exit;
    }else{
        include '../views/user_delete_form.php';
        exit;
    }
}