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
        <a href="/"><< Inicio</a>
        <a href="/posts/{{ $post->id }}/edit">Editar</a>
    </div>
</body>
</html>
