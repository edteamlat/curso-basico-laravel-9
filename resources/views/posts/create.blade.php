<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear post</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <form class="form-post" action="/posts" method="POST">
            <h2>Crear post</h2>

            @csrf

            <div class="form-group">
                <label>Título</label>
                <input type="text" name="title">
            </div>
            <div class="form-group">
                <label>Resumen</label>
                <textarea name="excerpt" id="" cols="30" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label>Contenido</label>
                <textarea name="content" id="" cols="30" rows="6"></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>
