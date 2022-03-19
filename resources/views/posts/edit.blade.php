<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar post</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="w-1/2 mx-auto">
        <form class="mt-5" action="/posts/{{ $post->id }}" method="POST">
            <h2 class="font-bold text-xl">Editar post</h2>

            @csrf
            @method('PATCH')

            <div class="form-group">
                <label>Título</label>
                <input type="text" name="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label>Resumen</label>
                <textarea name="excerpt" id="" cols="30" rows="4">{{ $post->excerpt }}</textarea>
            </div>
            <div class="form-group">
                <label>Contenido</label>
                <textarea name="content" id="" cols="30" rows="6">{{ $post->content }}</textarea>
            </div>
            <div class="flex gap-x-1 mt-2">
                <button type="submit" class="btn-primary">Actualizar</button>
                <a href="/posts/{{ $post->id }}" class="btn">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
