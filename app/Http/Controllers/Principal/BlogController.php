<?php

namespace App\Http\Controllers\Principal;

use App\Models\Blog\Category;
use App\Models\Blog\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        $categories = Category::inRandomOrder()->limit(15)->get();
        return view('principal.blog.index', compact('posts', 'categories'));
    }

    public function show($slug)
    {
        $posts = Post::paginate(20);
        $post = Post::where('slug', '=', $slug)->firstOrFail();
        $categories = Category::inRandomOrder()->limit(15)->get();
        return view('principal.blog.show', compact('post', 'posts', 'categories'));
    }
}
