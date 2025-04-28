<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>
    <link rel="stylesheet" href="../public/estilos.css">

</head>
<body>
    <h1>Registrar usuario</h1>
    <form action="../controllers/user_store.php" method="POST">
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Edad:</label><br>
        <input type="number" id="age" name="age" required><br><br>

        <label for="email">Correo electrónico:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Registrar</button>
    </form>
    <a href="../index.php" class="btn-volver">← Volver a la lista</a>
</body>
</html>