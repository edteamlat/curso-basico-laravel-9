<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = [
        [
            'title' => 'Novedades de Laravel 9.',
            'excerpt' => 'Cillum nulla magna ut laboris aliquip excepteur voluptate reprehenderit adipisicing. Id anim Lorem sint ut proident sint tempor anim ex exercitation excepteur fugiat duis ullamco. Consequat nulla excepteur enim duis sint id magna adipisicing aliqua commodo mollit. Veniam consectetur anim magna culpa. Et proident magna labore sint mollit id magna sit esse elit.',
        ],
        [
            'title' => 'Curso de Laravel 9.',
            'excerpt' => 'Cillum nulla magna ut laboris aliquip excepteur voluptate reprehenderit adipisicing. Id anim Lorem sint ut proident sint tempor anim ex exercitation excepteur fugiat duis ullamco. Consequat nulla excepteur enim duis sint id magna adipisicing aliqua commodo mollit. Veniam consectetur anim magna culpa. Et proident magna labore sint mollit id magna sit esse elit.',
        ],
        [
            'title' => 'Manejo básico de Eloquent.',
            'excerpt' => 'Cillum nulla magna ut laboris aliquip excepteur voluptate reprehenderit adipisicing. Id anim Lorem sint ut proident sint tempor anim ex exercitation excepteur fugiat duis ullamco. Consequat nulla excepteur enim duis sint id magna adipisicing aliqua commodo mollit. Veniam consectetur anim magna culpa. Et proident magna labore sint mollit id magna sit esse elit.',
        ],
    ];

    return view('welcome')->with('posts', $posts);
});


