<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;

class LatestPosts extends Component
{

    public $posts;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($number)
    {

        $this->posts = Post::orderBy('created_at', 'DESC')
            ->take($number)
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.latest-posts');
    }
}
