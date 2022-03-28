<x-app-layout>
    <x-slot name="title">Editar post</x-slot>
    <x-slot name="header">Editar post</x-slot>

    <div class="w-1/2 mx-auto mt-5">
        <form action="/posts/{{ $post->id }}" method="POST">
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
</x-app-layout>
