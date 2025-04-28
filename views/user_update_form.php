<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actualizar usuario</title>
    <link rel="stylesheet" href="../public/estilos.css">

</head>
<body>
    <h1>Actualizar usuario</h1>
    <form action="user_update.php" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($userData['id']) ?>">

        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($userData['name']) ?>" required><br><br>

        <label for="age">Edad:</label><br>
        <input type="number" id="age" name="age" value="<?= htmlspecialchars($userData['age']) ?>" required><br><br>

        <label for="email">Correo electrónico:</label><br>
        <input type="email" id="email" name="email" value="<?= htmlspecialchars($userData['email']) ?>" required><br><br>

        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" value="<?= htmlspecialchars($userData['password']) ?>" required><br><br>

        <button type="submit">Actualizar</button>
    </form>
    <a href="user_index.php">Volver a la lista</a>
</body>
</html>