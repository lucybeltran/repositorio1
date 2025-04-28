<?php
// filepath: c:\laragon\www\backend-github\6.arquitectura-mvc\views\user_list.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="../public/estilos.css">

</head>
<body>
    <h1>Lista de Usuarios</h1>
    <a href="user_store.php">Registrar nuevo usuario</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Email</th>
            <th>Acciones</th>
            <th>Posts</th>
        </tr>
        <?php if (!empty($users)): ?>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['id']) ?></td>
                    <td><?= htmlspecialchars($user['name']) ?></td>
                    <td><?= htmlspecialchars($user['age']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td>
                        <a href="user_update.php?id=<?= $user['id'] ?>">Actualizar</a>
                        <a href="user_delete.php?id=<?= $user['id'] ?>">Eliminar</a>
                    </td>
                    <td>
                        <a href="user_posts.php?id=<?= $user['id'] ?>">Ver</a>
                        <a href="post_create.php?id=<?= $user['id'] ?>">Publicar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="4">No hay usuarios registrados.</td></tr>
        <?php endif; ?>
    </table>
</body>
</html>