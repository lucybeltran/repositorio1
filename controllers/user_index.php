<?php
/* Controlador de registro de usuario
*/

require_once '../models/User.php';
$user = new User();
$users = $user->getAll();
include '../views/user_list.php';
exit;