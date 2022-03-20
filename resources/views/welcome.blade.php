@extends('layouts.app')

@section('title', 'Bienvenidos')

@section('content')
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
@endsection
