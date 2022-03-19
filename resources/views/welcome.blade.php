<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog de Jairo</title>
    <link rel="stylesheet" href="/css/app.css">
    {{-- <link rel="stylesheet" href="/css/bootstrap.css"> --}}
    {{-- <script src="/js/app.js"></script> --}}
</head>
<body>
    <div class="w-1/2 mx-auto">

        @foreach ($posts as $post)
            <article class="mt-5">
                <h1 class="text-xl font-bold border-gray-300 border-b">
                    <a href="/posts/{{ $post->id }}" class="hover:text-indigo-500">{{ $post->title }}</a>
                </h1>
                <p class="text-gray-600">{{ $post->excerpt }}</p>
            </article>
        @endforeach

    </div>

</body>
</html>
