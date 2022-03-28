<x-dynamic-component :component="Auth::check() ? 'appLayout' : 'guestLayout' ">
    <x-slot name="title">{{ $post->title }}</x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>
    <div class="w-1/2 mx-auto">
        <article class="mt-5">
            <h1 class="text-xl font-bold border-gray-300 border-b">{{ $post->title }}</h1>
            <p class="text-gray-600">{{ $post->content }}</p>
        </article>
        <div class="mt-5 flex gap-2">
            <a href="/" class="btn">&#8592; Inicio</a>
            <a href="/posts/{{ $post->id }}/edit" class="btn">Editar</a>
            <form action="/posts/{{ $post->id }}" method="POST" style="display: inline-block;">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn" onclick="return confirm('¿Estás seguro de borrar este post?')">Eliminar</button>
            </form>
        </div>
        <h4 class="mt-5 text-lg font-bold">Comentarios</h4>
        <div class="text-sm">
            @foreach ($comments as $comment)
                <div class="mt-3">{{ $comment->content }}</div>
                <small class="text-gray-400">{{ $comment->name }}</small>
                <hr>
            @endforeach
        </div>
    </div>
</x-dynamic-component>
