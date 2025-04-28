<!-- filepath: c:\laragon\www\backend-github\6.arquitectura-mvc\views\user_delete_form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eliminar usuario</title>
    <link rel="stylesheet" href="../public/estilos.css">

</head>
<body>
    <h1>Eliminar usuario</h1>
    <p>¿Estás seguro de que deseas eliminar el siguiente usuario?</p>
    <ul>
        <li><strong>ID:</strong> <?= htmlspecialchars($userData['id']) ?></li>
        <li><strong>Nombre:</strong> <?= htmlspecialchars($userData['name']) ?></li>
        <li><strong>Edad:</strong> <?= htmlspecialchars($userData['age']) ?></li>
        <li><strong>Email:</strong> <?= htmlspecialchars($userData['email']) ?></li>
    </ul>
    <form action="user_delete.php" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($userData['id']) ?>">
        <button type="submit">Eliminar</button>
        <a href="user_index.php">Cancelar</a>
    </form>
</body>
</html>