<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\View\View;

class NewsController extends Controller
{
    public function index(string $locale): View
    {
        $posts = Post::query()
            ->where('is_active', true)
            ->with('category')
            ->latest('published_at')
            ->get();

        return view('client.pages.news', [
            'posts' => $posts,
        ]);
    }
}
