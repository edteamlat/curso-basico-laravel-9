<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <article>
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->content }}</p>
        </article>
        <a href="/" class="btn">&#8592; Inicio</a>
        <a href="/posts/{{ $post->id }}/edit" class="btn">Editar</a>
        <form action="/posts/{{ $post->id }}" method="POST" style="display: inline-block;">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn" onclick="return confirm('¿Estás seguro de borrar este post?')">Eliminar</button>
        </form>
        <h4>Comentarios</h4>
        <div>
            @foreach ($comments as $comment)
                <div>{{ $comment->content }}</div>
                <small style="color: #aaa;">{{ $comment->name }}</small>
                <hr>
            @endforeach
        </div>
    </div>
</body>
</html>
