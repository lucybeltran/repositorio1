<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar post</title>
    <link rel="stylesheet" href="../public/estilos.css">

</head>

<body>
    <form action="../controllers/post_create.php" method="post">
        <input type="number" name="user_id" hidden value="<?= $user_id ?>">
        <div>
            <label for="title">Titulo de post</label>
            <input type="text" id="title" name="title">
        </div>

        <div>
            <label for="content">Titulo de post</label>
            <textarea id="content" name="content">
            </textarea>
        </div>
        <button type="submit">
            Registrar Post
        </button>
    </form>
    <a href="../index.php" class="btn-volver">← Volver a la lista</a>


</body>
</html>